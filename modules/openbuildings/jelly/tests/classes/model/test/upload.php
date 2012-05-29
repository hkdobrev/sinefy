<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Represents an upload item in the database.
 *
 * @package  Jelly
 */
class Model_Test_Upload extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		// Set database to connect to
		$meta->db(Unittest_Jelly_Testcase::$database_connection);

		// Define fields
		$meta->fields(array(
			'id'         => Jelly::field('primary'),
			'file'       => Jelly::field('upload', array(
				'server' => 'test_local'
			)),
			'file2'       => Jelly::field('upload', array(
				'server' => 'test_local',
				'path' => 'test/:model/:model:id',
			)),

		 ));
	}

} // End Model_Test_Author