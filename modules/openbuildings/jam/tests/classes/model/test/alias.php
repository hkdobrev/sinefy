<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Used for testing aliasing. Has no real DB equivalent.
 *
 * @package  Jam
 */
class Model_Test_Alias extends Jam_Model {

	public static function initialize(Jam_Meta $meta)
	{
		// Set database to connect to
		$meta->db(Unittest_Jam_Testcase::$database_connection);

		// All fields are aliased to different columns
		$meta->fields(array(
			'id'           => Jam::field('primary', array(
				'column' => 'id-alias',
			)),
			'name'         => Jam::field('string', array(
				'column' => 'name-alias',
			)),
			'description'  => Jam::field('string', array(
				'column' => 'description-alias',
			)),
			
			'_id'          => 'id',
			'_name'        => 'name',
			'_description' => 'description',
			
			// Non-existent alias shouldn't hurt anybody
			'_bar'         => 'foo',
		));
	}

} // End Model_Test_Alias