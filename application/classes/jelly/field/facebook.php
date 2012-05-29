<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Holds a facebook id.
 */
class Jelly_Field_Facebook extends Jelly_Field_Integer {

	public $unique = TRUE;

	public $allow_null = FALSE;

	public function initialize($model, $value)
	{
		parent::initialize();

		$this->rule('positive');
		$this->rule('not_empty');
	}

}
