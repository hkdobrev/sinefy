<?php defined('SYSPATH') OR die('No direct script access.');

if ( ! class_exists('Command_DB'))
{
	Kohana::load(Kohana::find_file('command', 'db'));
}

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

}
