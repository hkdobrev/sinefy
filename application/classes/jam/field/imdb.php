<?php defined('SYSPATH') OR die('No direct script access.');

class Jam_Field_IMDB extends Jam_Field_Integer {

	public $default = NULL;

	public function initialize($model, $value)
	{
		parent::initialize();

		$this->rule('positive');
	}


}
