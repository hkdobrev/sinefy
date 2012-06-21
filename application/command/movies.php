<?php defined('SYSPATH') OR die('No direct script access.');

require_once Kohana::find_file('command', 'db');

class Command_Movies extends Command_DB {

	const LOAD_BRIEF = 'Load movies from an SQL file';

	public function load(Command_Options $options, $database = NULL)
	{
		$type = $database ?: 'default';

		$db = Kohana::$config->load("database.$type.connection");	

		if( ! isset($db['database']) )
		{
			$matches = array();
			if( ! preg_match('/dbname=([^;]+);', $db['dsn'], $matches));
				throw new Kohana_Exception("Error connecting to database, database missing");
			$db['database'] = $matches[1];
		}

		$file = $options->has('file') ? $options['file'] : 'movies.sql';

		$file = Kohana::$config->load("migrations.path").DIRECTORY_SEPARATOR.$file;

		$this->log_func("system", array(strtr("mysql -u:username -p:password :database < :file ", array(
			':username' => $db['username'],
			':password' => $db['password'],
			':database' => $db['database'],
			':file'      => $file
		))), Command::OK, "Loading data from ".Debug::path($file)." to ".$db['database']);
	}

	const IMPORT_BRIEF = 'Import a movie ("--m=") via `id` for Facebook or `name` for TMDB';
	public function import(Command_Options $options, $movie = NULL)
	{
		if ( ! $movie)
			throw new Kohana_Exception('You must specify a movie!');

		if (is_numeric($movie))
		{
			$movie_fb_id = (int) $movie;

			try
			{
				$facebook = new Facebook(array(
					'appId'  => Kohana::$config->load('facebook.app_id'),
					'secret' => Kohana::$config->load('facebook.app_secret'),
				));

				// TODO: add load_fb_data method in Model_Movie
				ORM::factory('movie')
					->load_fb_data($facebook->api('/'.$movie_fb_id))
					->save();
			}
			catch (FacebookApiException $fb_exception)
			{
				Kohana::$log->add(Log::WARNING, 'Facebook movie import failed for '.$movie_fb_id.'!');
				Kohana::$log->add(Log::ERROR, $fb_exception->getMessage());
				Kohana::$log->add(Log::STRACE, $fb_exception->getTraceAsString());
			}
		}
		else
		{
			$movie_name = $movie;
			// TODO: TMDB import
		}
			
	}

	public function fbimport(Command_Options $options, $user_id, $access_token)
	{
		$fb = Service::factory('facebook');
		$fb->access_token($access_token);

		$movie_fields = 'id,name,category,likes,talking_about_count';

		$batch = array(
			array(
				'method' => 'GET',
				'name' => 'get-friends',
				'relative_url' => 'me/friends'.URL::query(array(
					'limit' => 5000,
					'fields' => 'id,name,gender,username,installed'
				)),
				'omit_response_on_success' => false,
			),
			array(
				'method' => 'GET',
				'relative_url' => 'me/movies?limit=5000&fields='.$movie_fields
			),
			array(
				'method' => 'GET',
				'depends_on' => 'get-friends',
				'relative_url' => 'movies?limit=5000&ids={result=get-friends:$.data.*.id}&fields='.$movie_fields
			),
		);

		$response = $fb->api('?batch='.urlencode(json_encode($batch)), 'POST');

		list($friends, $my_movies, $friends_movies) = $response;

		$friends = Arr::get(json_decode(Arr::get($friends, 'body'), TRUE), 'data');
		$my_movies = Arr::get(json_decode(Arr::get($my_movies, 'body'), TRUE), 'data');
		$friends_movies = json_decode(Arr::get($friends_movies, 'body'), TRUE);

		$friends_count = Model_User::import_friends($friends, $user_id);
		$my_movies_count = Model_Movie::import_movies($my_movies, $user_id);
		$friends_movies_count = Model_Movie::import_movies($friends_movies);

		Command::log('Number of friends imported: '.$friends_count, Command::OK);
		Command::log('Number of user movies imported: '.count($my_movies_count), Command::OK);
		Command::log('Number of friend movies imported: '.$friends_movies_count, Command::OK);
	}

}
