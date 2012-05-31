<?php defined('SYSPATH') OR die('No direct script access.');

class Unittest_Taxonomy_TestCase extends Unittest_Database_TestCase {

	static public $database_connection = 30;
	static public $database_type = 'mysql';

	public function setUp()
	{
		$this->_database_connection = Unittest_Taxonomy_Testcase::$database_connection;
		parent::setUp();
	}

	/**
	 * Inserts default data into database.
	 *
	 * @return  PHPUnit_Extensions_Database_DataSet_IDataSet
	 * @uses    Kohana::find_file
	 */
	public function getDataSet()
	{
		return $this->createXMLDataSet(Kohana::find_file('tests/test_data/taxonomy', 'test', 'xml'));
	}

} // End Kohana_Unittest_Jam_TestCase