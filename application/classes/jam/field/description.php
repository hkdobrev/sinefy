<?php defined('SYSPATH') OR die('No direct script access.');

class Jam_Field_Description extends Jam_Field_Text {

	/**
	 * Descriptions could be NULL
	 * @var boolean
	 */
	public $allow_null = TRUE;

	public $convert_empty = TRUE;

	public function initialize($model, $column)
	{
		parent::initialize($model, $column);

		$this->filter('trim');
	}

}
