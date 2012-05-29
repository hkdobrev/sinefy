<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Represents an image copyright in the database.
 *
 * @package  Jelly
 */
class Model_Test_Copyright extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		// Set database to connect to
		$meta->db(Unittest_Jelly_Testcase::$database_connection);

		$meta->associations(array(
			'test_image'     => Jelly::association('belongsto', array('dependent' => Jelly_Association::DELETE)),
		));

		// Set fields
		$meta->fields(array(
			'id'              => Jelly::field('primary'),
			'anme'            => Jelly::field('string'),
		));
	}

} // End Model_Test_Post