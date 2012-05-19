<?php defined('SYSPATH') OR die('No direct script access.');

class Auth_Facebook extends Auth_ORM {

	/**
	 * Facebook SDK instance
	 * @var Facebook
	 */
	protected $_facebook;

	public function get_user($default = NULL)
	{
		$user = parent::get_user();

		if ( ! $user)
		{
			$user = $this->get_user_from_facebook();
		}

		return $user;
	}

	/**
	 * Get and cache a Facebook SDK instance
	 * @return Facebook
	 */
	public function facebook()
	{
		if ( ! $this->_facebook)
		{
			Kohana::load(Kohana::find_file('vendor/facebook-php-sdk', 'facebook'));

			$this->_facebook = new Facebook(array(
				'appId'  => Kohana::$config->load('facebook.app_id'),
				'secret' => Kohana::$config->load('facebook.app_secret'),
			));
		}

		return $this->_facebook;
	}

	public function get_user_from_facebook()
	{
		return $this->facebook()->getUser();
	}

}
