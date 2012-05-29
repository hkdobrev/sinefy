<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Represents an author in the database.
 *
 * @package  Jelly
 */
class Model_Test_Author extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		// Set database to connect to
		$meta->db(Unittest_Jelly_Testcase::$database_connection);

		$meta->associations(array(
			'test_post'        => Jelly::association('hasone', array('inverse_of' => 'test_author')),
			'test_posts'       => Jelly::association('hasmany'),
			'test_blogs_owned' => Jelly::association('hasmany', array(
				'foreign' => 'test_blogs',
				'column'  => 'test_owner_id'
			)),
			'test_categories'  => Jelly::association('hasmany'),

			// Relationship with non-standard naming
			'permission' => Jelly::association('belongsto', array(
				'foreign' => 'test_position',
				'column'  => 'test_position_id',
			)),
			'styles' => Jelly::association('taxonomy_terms', array('vocabulary' => 'Styles', 'vocabulary_model' => 'test_vocabulary', 'through' => 'test_terms_items', 'foreign' => 'test_term.id'))
		));

		// Define fields
		$meta->fields(array(
			'id'         => Jelly::field('primary'),
			'name'       => Jelly::field('string'),
			'password'   => Jelly::field('password'),
			'email'      => Jelly::field('email'),
			// Aliases for testing
			'_id'        => 'id',
		 ));
	}

} // End Model_Test_Author