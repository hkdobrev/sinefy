<?php defined('SYSPATH') OR die('No direct script access.');

class Jam_Behavior_User extends Jam_Behavior {

	public static function model_after_create(Model_User $user)
	{
		Kohana::$log->add(Log::INFO, 'created user -> beanstalkd now');
		Service::factory('beanstalkd')->facebook_import($user);
	}
}
