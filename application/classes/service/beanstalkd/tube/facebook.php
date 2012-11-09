<?php defined('SYSPATH') OR die('No direct script access.');

class Service_Beanstalkd_Tube_Facebook extends Service_Beanstalkd_Tube{

	public function execute($job_data)
	{
		Kohana::$log->add(Log::INFO, 'execute job: '.$job_data);
		$params = json_decode($job_data, TRUE);

		Service::factory('facebook')->access_token($params['access_token']);

		switch ($params['action'])
		{
			case 'import':
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

				$response = Service::factory('facebook')->api('?batch='.urlencode(json_encode($batch)), 'POST');

				list($friends, $my_movies, $friends_movies) = $response;

				$friends = Arr::get(json_decode(Arr::get($friends, 'body'), TRUE), 'data');
				$my_movies = Arr::get(json_decode(Arr::get($my_movies, 'body'), TRUE), 'data');
				$friends_movies = json_decode(Arr::get($friends_movies, 'body'), TRUE);

				Model_User::import_friends($friends, $params['user_id']);
				Model_Movie::import_movies($my_movies, $params['user_id']);
				Model_Movie::import_movies($friends_movies);
			break;

			case 'delete':

				if (Service::factory('facebook')->permissions('publish_actions'))
				{
					$opengraph_response = Service::factory('facebook')->delete($params['opengraph_id']);

					$this->_log_og_response($job_data, $opengraph_response);
				}

			break;

			case 'like':

				if (Service::factory('facebook')->permissions('publish_actions'))
				{
					if ($item = $this->item($params))
					{
						$url = Resource::url(($params['type'] == 'professional') ? $item->company : $item->item, TRUE);

						$opengraph_response = Service::factory('facebook')->og_post($params['action'], $params['type'], $url);

						$this->_log_og_response($job_data, $opengraph_response);
						$item->update_facebook_id($opengraph_response);
					}
				}

			break;

			default:

				System_Daemon::log(System_Daemon::LOG_ERR, $job_data."\n".'Unknown facebook service action: '.$params['action']);

			break;
		}
	}

	protected function _log_og_response($job_data, $response, $item = NULL)
	{
		$type = isset($response['error']) ? System_Daemon::LOG_ERR : System_Daemon::LOG_INFO;
		System_Daemon::log($type, $job_data."\n".'Response: '.print_r($response, TRUE));
	}
}
