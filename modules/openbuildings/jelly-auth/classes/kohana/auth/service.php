<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Jelly Auth driver.
 *
 * @package    Kohana/Auth
 * @author     Ivan Kerin
 * @copyright  (c) 2011-2012 Despark Ltd.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
abstract class Kohana_Auth_Service {

	protected $_service_field;

	protected $_type;

	protected $_api;

	protected $_enabled;

	protected $_config = array();

	protected $_login_role;

	protected $_user_model = 'user';	

	protected $_role_model = 'role';	

	public function api($api = NULL)
	{
		if ( ! $this->_api)
		{
			$this->_api = $api ?: $this->initialize();
		}
		return $this->_api;
	}

	public function __construct($config = NULL)
	{
		$this->_config = (array) $config;
		$this->_enabled = Arr::get($config, 'enabled', FALSE);
	}

	public function type()
	{
		return $this->_type;
	}

	public function auto_login_enabled()
	{
		return Arr::get($this->_config, 'auto_login', FALSE);
	}

	public function enabled($enabled = NULL)
	{
		if ($enabled !== NULL)
		{
			$this->_enabled = $enabled;
			return $this;
		}
		return $this->_enabled;
	}

	public function build_user($data, $create = TRUE)
	{
		if ($this->logged_in() AND ! empty($data))
		{
			$user = Jelly::factory($this->_user_model);

			if ($user->load_service_values($this, $data, $create) === FALSE)
				return FALSE;

			$user->roles->add(Jelly::factory($this->_role_model, 'login'));

			$user->set($this->_service_field, $this->service_uid());

			return $user;
		}
	}

	public function get_user()
	{
		if ($this->enabled() AND $this->logged_in())
		{
			$user = Jelly::query($this->_user_model)->where($this->_service_field, '=', $this->service_uid())->find();

			$data = $this->service_user_info();

			if ( ! $user->loaded())
			{
				if (isset($data['email']))
				{
					$user = Jelly::query($this->_user_model)->where('email', '=', $data['email'])->find();
				}
				elseif ( ! (Arr::get($this->_config, 'create_user') AND $user = $this->build_user($data, TRUE)))
				{
					throw new Auth_Exception_Service('Service :service user with service uid :id does not exist and faild to create', array(
						':service' => $this->type(),
						':id' => $this->service_uid()
					));
				}

				$user->set($this->_service_field, $this->service_uid());
				$user->save();
			}
			elseif (Arr::get($this->_config, 'update_user'))
			{
				$user->load_service_values($this, $data, FALSE);
				$user->save();
			}
			return $user;
		}
		return FALSE;
	}

	public function logout()
	{
		if ( ! $this->enabled())
			return FALSE;

		return $this->logout_service(Request::initial(), URL::site(Request::current()->url(), TRUE));
	}

	public function login()
	{
		if ( ! $this->enabled())
			return FALSE;

		if (($user = $this->get_user()))
		{
			return $user;
		}
		else
		{
			$login_url = $this->login_url(URL::site(Arr::get($this->_config, 'back_url', Request::current()->url())), TRUE);

			Request::current()->redirect($login_url);
			return FALSE;
		}
	}

	abstract public function initialize();

	abstract public function logged_in();

	abstract public function login_url($back_url);
	
	abstract public function logout_service($request, $back_url);

	abstract public function service_user_info();

	abstract public function service_uid();

} // End Auth Jelly