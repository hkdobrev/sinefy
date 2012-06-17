<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Comment extends Jam_Model {

	public static function initialize(Jam_Meta $meta)
	{
		$meta->behaviors(array(
			'paranoid' => Jam::behavior('paranoid')
		));

		$meta->associations(array(
			'author' => Jam::association('belongsto', array(
				'foreign' => 'user',
				'required' => TRUE
			)),

			// the commented item
			'item' => Jam::association('belongsto', array(
				'polymoprhic' => TRUE,
				'required' => TRUE
			))
		));

		$meta->fields(array(
			'id' => Jam::field('primary'),
			'text' => Jam::field('description'),

			'created_at' => Jam::field('timestamp', array('auto_now_create' => TRUE, 'format' => 'Y-m-d H:i:s')),
		));
	}
}
