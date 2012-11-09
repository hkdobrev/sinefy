<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Service_Beanstalkd_Tube extends Kohana_Service_Beanstalkd_Tube {

	public function handle_exception(Exception $exception)
	{
		Kohana::$log->add(Log::ERROR, 'tube exception: '.$exception->getMessage());
		parent::handle_exception($exception);

		if ($exception instanceof Jam_Validation_Exception)
		{
			$objects = array();
			foreach ($exception->objects as $object) 
			{
				$objects[] = (string) $object;
			}

			System_Daemon::log(System_Daemon::LOG_ERR, print_r(array('errors' => $exception->errors(), 'objects' => $objects), TRUE));
		}
	}

	public function item($params)
	{
		$item = Jam::factory($params['model'], $params['id']);

		return $item->loaded() ? $item : NULL;
	}
}
