<?php defined('SYSPATH') OR die('No direct access allowed.'); 

class Model_Test_Term extends Kohana_Model_Term {

	static public function initialize(Jam_Meta $meta)
	{
		$meta->db(Unittest_Taxonomy_Testcase::$database_connection);

		parent::initialize($meta);
		$meta->table("test_terms");
		$meta->associations(array(
			'test_taxonomy_posts' => Jam::association('taxonomy_items', array('through' => 'test_terms_items')),
			'test_taxonomy_authors' => Jam::association('taxonomy_items', array('through' => 'test_terms_items')),
			'vocabulary' => Jam::association('belongsto', array('foreign' => 'test_vocabulary', 'column' => 'vocabulary_id'))
		));
	}
}