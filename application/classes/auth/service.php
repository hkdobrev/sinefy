<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Auth_Service extends Kohana_Auth_Service {

	public function get_user()
	{
		if ($this->enabled() AND $this->logged_in())
		{
			$user = Jam::query($this->_user_model)->where($this->_service_field, '=', $this->service_uid())->find();

			$data = $this->service_user_info();

			if ( ! $user->loaded())
			{
				if (isset($data['email']) AND Arr::get($this->_config, 'check_email'))
				{
					$user = Jam::query($this->_user_model)->where('email', '=', $data['email'])->find();
				}
				elseif ( ! (Arr::get($this->_config, 'create_user') AND $user = $this->build_user($data, TRUE)))
				{
					throw new Auth_Exception_Service('Service :service user with service uid :id does not exist and faild to create', array(
						':service' => $this->type(),
						':id' => $this->service_uid()
					));
				}

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

}
