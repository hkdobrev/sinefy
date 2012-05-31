<?php defined('SYSPATH') OR die('No direct access allowed.'); 

class Model_Test_Vocabulary extends Kohana_Model_Vocabulary {

	static public function initialize(Jam_Meta $meta)
	{
		$meta->db(Unittest_Taxonomy_Testcase::$database_connection);

		parent::initialize($meta);

		$meta->table('test_vocabularies');
		$meta->foreign_key('vocabulary_id');
	}
}