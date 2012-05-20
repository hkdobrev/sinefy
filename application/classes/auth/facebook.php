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
			$facebook_id = $this->facebook()->getUser();
			if ($facebook_id)
			{
				$user = ORM::factory('user', array('facebook_id' => $facebook_id));
				if ($user->loaded())
				{
					$this->force_login($user);
				}
				else
				{
					$user = ORM::factory('user')
						->populate_from_facebook($this->facebook()->api('/me'))
						->save();

						$movies = ORM::factory('movie')->find_all();
						$rankings = range(1, $movies->count());
						shuffle($rankings);
						foreach ($movies as $k => $movie) {
							ORM::factory('movies_user')->values(array(
								'user_id' => $user->pk(),
								'movie_id' => $movie->pk(),
								'ranking' => $rankings[$k]
							))->save();
						}

					$this->force_login($user);
				}
			}
			else
			{
				$user = NULL;
			}
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
}
