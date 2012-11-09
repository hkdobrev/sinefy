<?php defined('SYSPATH') OR die('No direct script access.');

class Service_Beanstalkd extends Kohana_Service_Beanstalkd {

	public function facebook($action, $item_type, $item, $delay = 3, $importance = 1024)
	{
		if ( ! $this->initialized())
			return NULL;

		$params = array(
			'action' => $action,
			'type' => $item_type,
			'model' => $item->meta()->model(),
			'id' => $item->id(),
			'access_token' => Service::factory('facebook')->access_token()
		);

		$this->pheanstalk()->putInTube('facebook', json_encode($params), $importance, $delay);
	}

	public function facebook_import($user, $delay = 0, $importance = 1024)
	{
		Kohana::$log->add(Log::INFO, 'facebook_import via beanstalkd');

		if ( ! $this->initialized())
			return NULL;

		Kohana::$log->add(Log::INFO, 'beanstalkd is initialized and will put in fb tube');


		$params = array(
			'action' =>'import',
			'model' => 'user',
			'user_id' => $user instanceof Model_User ? $user->id() : (int) $user,
			'access_token' => Service::factory('facebook')->access_token()
		);

		$this->pheanstalk()->putInTube('facebook', json_encode($params), $importance, $delay);
	}

	public function facebook_delete($facebook_action_id, $delay = 0, $importance = 1024)
	{
		if ( ! $this->initialized())
			return NULL;

		if (Service::factory('facebook')->og_enabled())
		{
			$params = array(
				'action' => 'delete',
				'opengraph_id' => $facebook_action_id,
				'access_token' => Service::factory('facebook')->access_token()
			);

			$this->pheanstalk()->putInTube('facebook', json_encode($params), $importance, $delay);	
		}
	}
}
