<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Represents a blog in the database.
 *
 * @package  Jelly
 */
class Model_Test_Blog extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		// Set database to connect to
		$meta->db(Unittest_Jelly_Testcase::$database_connection);

		$meta->associations(array(
			'test_owner'             => Jelly::association('belongsto'),
			'test_featured_category' => Jelly::association('hasone', array(
				'foreign' => 'test_category',
				'conditions' => array(
					'where' => array('test_category.is_featured', '=', TRUE),
					'limit' => array(1)
				)
			)),
			'test_posts'             => Jelly::association('hasmany', array('inverse_of' => 'test_blog', 'dependent' => Jelly_Association::DELETE)),
			'test_categories'        => Jelly::association('hasmany', array('required' => TRUE, 'inverse_of' => 'test_blog')),
			'test_tags'              => Jelly::association('manytomany', array(
				'required' => TRUE
			))
		));

		// Define fields
		$meta->fields(array(
			'id'         => Jelly::field('primary'),
			'name'       => Jelly::field('string'),
			'url'        => Jelly::field('weblink'),
			// Aliases for testing
			'_id'        => 'id',
		 ));
	}

} // End Model_Test_Author