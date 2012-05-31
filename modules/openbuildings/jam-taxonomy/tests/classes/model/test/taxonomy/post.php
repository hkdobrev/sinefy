<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Represents an author in the database.
 *
 * @package  Jam
 */
class Model_Test_Taxonomy_Post extends Jam_Model {

	public static function initialize(Jam_Meta $meta)
	{
		// Set database to connect to
		$meta->db(Unittest_Taxonomy_Testcase::$database_connection);

		$meta->associations(array(
			'types' => Jam::association('taxonomy_terms', array('vocabulary' => 'Types', 'vocabulary_model' => 'test_vocabulary', 'through' => 'test_terms_items', 'foreign' => 'test_term.id'))
		));

		// Define fields
		$meta->fields(array(
			'id'         => Jam::field('primary'),
			'name'       => Jam::field('string'),
		 ));
	}

} // End Model_Test_Author