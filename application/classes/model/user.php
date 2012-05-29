<?php defined('SYSPATH') OR die('No direct script access.');

class Model_User extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		$meta->name_key('username');

		$meta->behaviors(array(
			'paranoid'
		));

		$meta->associations(array(
			'movies' => Jelly::association('manytomany'),
			'user_tokens' => Jelly::association('hasmany'),
			'roles' => Jelly::association('manytomany'),
		));

		$meta->fields(array(
			'id' => Jelly::field('primary'),
			'username' => Jelly::field('string', array(
				'label' => 'username',
				'rules' => array(
					array('not_empty'),
					array('max_length', array(':value', 32)),
					array('min_length', array(':value', 3)),
					array('regex', array(':value', '/^[a-zA-Z0-9\_\-]+$/')),
				),
				'unique' => TRUE,
			)),
			'email' => Jelly::field('email', array(
				'label' => 'Email address',
				'rules' => array(
					array('not_empty'),
				),
				'unique' => TRUE,
			)),
			'name' => Jelly::field('name'),
			'facebook_id' => Jelly::field('facebook'),
			'last_login' => Jelly::field('timestamp'),
			'logins' => Jelly::field('integer', array(
				'default' => 0,
				'convert_empty' => TRUE,
				'empty_value' => 0,
			)),
		));
	}

	public function populate_from_facebook($data)
	{
		return $this->values(array(
			'facebook_id' => (int) Arr::get($data, 'id'),
			'email' => Arr::get($data, 'email'),
			'name' => Arr::get($data, 'name'),
		));
	}

	/**
	 * Complete the login for a user by incrementing the logins and saving login timestamp
	 */
	public function complete_login()
	{
		if ($this->loaded())
		{
			// Update the number of logins
			$this->logins = $this->logins + 1;

			// Set the last login date
			$this->last_login = time();

			// Save the user
			$this->save();
		}
	}

	public function load_service_values(Auth_Service $service, array $user_data, $create = FALSE)
	{
		if ($service->type() == 'facebook')
		{
			$this->set(array(
				'name' => Arr::get($user_data, 'name'),
				'username' => Arr::get($user_data, 'username')
			));
		}
	}

	public function generate_login_token()
	{
		return $this->user_tokens->build()->create_token();
	}
	
	public function has_facebook()
	{
		return TRUE;
	}

}


