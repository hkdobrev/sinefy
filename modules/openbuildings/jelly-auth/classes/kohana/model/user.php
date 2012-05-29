<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Default auth user
 *
 * @package	   Kohana/Auth
 * @author	   creatoro
 * @copyright  (c) 2011 creatoro
 * @license	   http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Model_User extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		$meta
			->name_key('username');

		$meta->associations(array(
			'user_tokens' => Jelly::association('hasmany'),
			'roles' => Jelly::association('manytomany'),
		));

		$meta->fields(array(
			'id' => Jelly::field('primary'),
			'email' => Jelly::field('email', array(
				'label' => 'email address',
				'rules' => array(
					array('not_empty'),
				),
				'unique' => TRUE,
			)),
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
			'password' => Jelly::field('password', array(
				'label' => 'password',
				'rules' => array(
					array('min_length', array(':value', 5)),
					array('max_length', array(':value', 30)),
				),
				'hash_with' => array( Auth::instance(), 'hash'),
			)),
			'logins' => Jelly::field('integer', array(
				'default' => 0,
				'convert_empty' => TRUE,
				'empty_value' => 0,
			)),
			'last_login' => Jelly::field('timestamp'),
			'facebook_uid' => Jelly::field('string'),
			'twitter_uid' => Jelly::field('string'),
			'last_login_ip' => Jelly::field('string', array(
				'label' => 'Last logged from',
				'rules' => array(
					array('ip')
				)
			)),
		));

		$meta->extend('add_password_validation', "Model_User::_add_password_validation");
	}

	static public function _add_password_validation(Jelly_Meta $meta)
	{
		$meta->extra_rules(array(
			'password' => array(array('not_empty')),
			'password_confirm' => array(
				array('not_empty'),
				array('min_length', array(':value', 5)),
				array('matches', array(':validation', ':field', 'password'))
			),
		));
	}

	/**
	 * Complete the login for a user by incrementing the logins and saving login timestamp
	 *
	 * @return void
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
		
	}

	public function generate_login_token()
	{
		return $this->user_tokens->build()->create_token();
	}
	
	public function has_facebook()
	{
		return (bool) $this->facebook_uid;
	}

} // End Auth User Model