<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Represents a video in the database.
 *
 * @package  Jelly
 */
class Model_Test_Video extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		// Set database to connect to
		$meta->db(Unittest_Jelly_Testcase::$database_connection);

		$meta->behaviors(array(
			'paranoid' => Jelly::behavior('paranoid', array('field' => 'deleted')),
			'sortable' => Jelly::behavior('sortable', array('field' => 'position')),
			'sluggable' => Jelly::behavior('sluggable', array('auto_save' => TRUE))
		));

		$meta->associations(array(
			'test_holder'	=> Jelly::association('belongsto', array(
				'polymorphic' => 'test_holder_type'
			)),
		));

		// Set fields
		$meta->fields(array(
			'id'              => Jelly::field('primary'),
			'file'            => Jelly::field('string', array(
				'rules' => array(
					array('min_length', array(':value', 4))
				)
			)),

			// Alias columns, for testing
			'_id'             => 'id',
			'_slug'           => 'slug',
		));
	}

} // End Model_Test_Post