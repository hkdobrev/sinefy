<?php defined('SYSPATH') OR die('No direct script access.');

class Model_User extends Kohana_Model_User {

	public static function initialize(Jam_Meta $meta)
	{
		$meta->name_key('username');

		$meta->behaviors(array(
			'paranoid' => Jam::behavior('paranoid')
		));

		$meta->associations(array(
			'movies' => Jam::association('manytomany'),
			'user_tokens' => Jam::association('hasmany'),
			'roles' => Jam::association('manytomany'),
		));

		$meta->fields(array(
			'id' => Jam::field('primary'),
			'username' => Jam::field('string', array(
				'label' => 'username',
				'rules' => array(
					array('not_empty'),
					array('max_length', array(':value', 32)),
					array('min_length', array(':value', 3)),
					array('regex', array(':value', '/^[a-zA-Z0-9\_\-]+$/')),
				),
				'unique' => TRUE,
			)),
			'email' => Jam::field('email', array(
				'label' => 'Email address',
				'rules' => array(
					array('not_empty'),
				),
				'unique' => TRUE,
			)),
			'name' => Jam::field('string'),
			'facebook_id' => Jam::field('facebook'),
			'last_login' => Jam::field('timestamp'),
			'logins' => Jam::field('integer', array(
				'default' => 0,
				'convert_empty' => TRUE,
				'empty_value' => 0,
			)),
		));
	}

	public function load_service_values(Auth_Service $service, array $user_data, $create = FALSE)
	{
		if ($service->type() == 'facebook')
		{
			$this->set(array(
				'name' => Arr::get($user_data, 'name'),
				'username' => Arr::get($user_data, 'username'),
				'facebook_id' => (int) Arr::get($user_data, 'id'),
				'email' => Arr::get($user_data, 'email')
			));
		}
	}

	public function has_facebook()
	{
		return TRUE;
	}

	static public function _add_password_validation(Jam_Meta $meta)
	{

	}
}
