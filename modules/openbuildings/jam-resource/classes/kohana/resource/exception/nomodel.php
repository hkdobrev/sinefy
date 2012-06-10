<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Resource_Exception_Nomodel extends Resource_Exception {

	public $model;

	public function __construct($message, $model, $fields = NULL)
	{
		$fields[':model'] = $this->model = $model;

		parent::__construct($message, $fields);
	}

}
