<?php defined('SYSPATH') OR die('No direct access allowed.');

class Auth_Jelly_Test extends Kohana_Auth_Jelly {

	protected function _load_user($user)
	{
		return is_object($user) ? $user : Jelly::factory('test_user', $user);
	}

	protected function _load_token($token)
	{
		return is_object($token) ? $token : Jelly::factory('test_user_token')->get_token($token);
	}

	protected function _autologin_cookie($token = NULL, $expires = NULL)
	{
		if ($token === FALSE)
		{
			unset($_COOKIE['authautologin']);
		}
		elseif ($token !== NULL) 
		{
			$_COOKIE['authautologin'] = $token;
		}
		else
		{
			return Arr::get($_COOKIE, 'authautologin');
		}

		return $this;
	}

	public function set_service($name, $service)
	{
		$this->_services[$name] = $service;
	}

}