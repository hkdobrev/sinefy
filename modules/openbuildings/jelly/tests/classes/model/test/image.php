<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Represents an image in the database.
 *
 * @package  Jelly
 */
class Model_Test_Image extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		// Set database to connect to
		$meta->db(Unittest_Jelly_Testcase::$database_connection);

		$meta->associations(array(
			'test_holder'     => Jelly::association('belongsto', array('polymorphic' => TRUE)),
			'test_copyright'     => Jelly::association('hasone', array('dependent' => Jelly_Association::ERASE)),
			'test_copyrights'     => Jelly::association('hasmany', array('dependent' => Jelly_Association::ERASE)),
		));

		// Set fields
		$meta->fields(array(
			'id'              => Jelly::field('primary'),
			'file'            => Jelly::field('string'),

			// Alias columns, for testing
			'_id'             => 'id',
			'_slug'           => 'slug',
		));
	}

} // End Model_Test_Post