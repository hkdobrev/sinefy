<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Represents a category in the database.
 *
 * @package  Jelly
 */
class Model_Test_Category extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		// Set database to connect to
		$meta->db(Unittest_Jelly_Testcase::$database_connection);

		$meta->behaviors(array(
			'nested' => Jelly::behavior('nested')
		));

		$meta->associations(array(
			'test_blog'   => Jelly::association('belongsto', array('inverse_of' => 'test_categories')),
			'test_posts'  => Jelly::association('manytomany'),
			'test_author' => Jelly::association('belongsto')
		));

		// Define fields
		$meta->fields(array(
			'id'          => Jelly::field('primary'),
			'name'        => Jelly::field('string'),
			'is_featured' => Jelly::field('boolean')
		));
	}

} // End Model_Test_Category