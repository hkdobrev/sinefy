<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Parser extends Controller {
	
	public function action_index()
	{
		$tokens = array("hkdobrev" => 'AAAAAAITEghMBAKKa74V8VsZBAtxMWOzdWS0EmFmAZAcq4TNcYnYF0ZBiycZCjx68ZCVTiIO6nh7Kn3F6iWCQZAJEDGHQi5BlnGGvmWOcrkc7DeK6FmXm2b',
						"1082926232" => 'AAAAAAITEghMBAFrTHwoYP1l5PsI10rqUiOBgEZBVFa6krXZA8s1sK3U25JAWxHdNUZCyO1y1kwSOVjSZB2D9PQH3BmqZACZA1I5MDLBw3mKx4q8pGXTIuc',
						"nstoitsev" => "AAAAAAITEghMBAOKOKoIvXykIEd4naPBO99zCJmaDI4yxiGbJVISfGbLyiLBvtJm5DEEgpTDhr79JFhYaxW6lX4d0W5y7FIRZB8wCbXwZDZD");

		
		Kohana::load(Kohana::find_file('vendor/facebook-php-sdk', 'facebook'));

		$facebook = new Facebook(array(
			'appId'  => Kohana::$config->load('facebook.app_id'),
			'secret' => Kohana::$config->load('facebook.app_secret'),
		));
		
		foreach ($tokens as $user_id => $token) 
		{
			$facebook->setAccessToken($token);


			$user_movies = $facebook->api('me/movies');

			// echo "<pre>"; print_r($user_movies); die;
			
			foreach($user_movies['data'] as $movie)
			{
				$movie_json = Request::factory('http://graph.facebook.com/' . $movie['id'])
										->execute()
										->body();

				$movie_data = json_decode($movie_json, true);

				// echo "<pre>"; print_r($movie_data); die;

				$movie_check = ORM::factory('movie', array('facebook_id' => Arr::get($movie_data, 'id')))->loaded();

				if (!$movie_check) 
				{
					$new_movie = ORM::factory('movie')
									->values(array(
												'name' => Arr::get($movie_data, 'name'),
												'about' => Arr::get($movie_data, 'description', Arr::get($movie_data, 'about')),
												'actors' => Arr::get($movie_data, 'starring'),
												'release_date' => Arr::get($movie_data, 'release_date'),
												'directed_by' => Arr::get($movie_data, 'directed_by'),
												'studio' => Arr::get($movie_data, 'studio'),
												'likes' => Arr::get($movie_data, 'likes'),
												'facebook_id' => Arr::get($movie_data, 'id'),
											))
									->save();
				}
			}
		}
	}
}