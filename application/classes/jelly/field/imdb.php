<?php defined('SYSPATH') OR die('No direct script access.');

class Jelly_Field_IMDB extends Jelly_Field_Integer {

	public $default = NULL;

	public function initialize($model, $value)
	{
		parent::initialize();

		$this->rule('positive');
	}


}
