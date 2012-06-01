<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Holds a facebook id.
 */
class Jam_Field_Facebook extends Jam_Field_Integer {

	public $unique = TRUE;

	public $allow_null = FALSE;

	public function initialize($model, $value)
	{
		parent::initialize($model, $value);

		$this->rule('positive');
		$this->rule('not_empty');
	}

}
