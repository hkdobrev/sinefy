<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Parser extends Controller {
	
	public function action_index()
	{
		$tokens = array("hkdobrev" => 'AAAAAAITEghMBAL14SZCNKLnuSusvNRWZCZCO1T7PiNko8masrcTARCDcWV0LcyXJRsXgn8snRhppG22dA8RAkXIErEqZC55bucupirHCfYPYvJAZC79hA',
						"1082926232" => 'AAAAAAITEghMBAMApJoXRnu6H8gLoxTR1sQxeLxFMIURjGkj39D6ZCmhKx5L9ZAVavPhZAIQADkp5EWzDNNSeeawuKoSZBQN5jdAChN24fQ9ebyp1qAtl',
						"nstoitsev" => "AAAAAAITEghMBAFTPfY6y0taHyNVcGgBDzkUDo8Y7uZBDSSmHLQJhMaer53ObNqbKcq2LcjrS6HsN0qhwzhsHP3iwruygjV3K1Nw37eAZDZD");

		
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