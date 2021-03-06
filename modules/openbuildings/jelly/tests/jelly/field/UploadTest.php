<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Tests for core Jelly methods.
 * @group jelly
 * @group jelly.field
 * @group jelly.field.upload
 * @package Jelly
 */
if ( ! defined("JELLY_UPLOAD_TEMP"))
	define("JELLY_UPLOAD_TEMP", MODPATH . "extensions/jelly/tests/test_data/temp");

if ( ! defined("JELLY_UPLOAD_LOCAL"))
	define("JELLY_UPLOAD_LOCAL", MODPATH . "extensions/jelly/tests/test_data/local");
	
if ( ! defined("JELLY_UPLOAD_TEST_LOCAL"))
	define("JELLY_UPLOAD_TEST_LOCAL", MODPATH . "extensions/jelly/tests/test_data/test_local");

class Jelly_Field_UploadTest extends Unittest_TestCase {

	protected $environmentDefault = array(
		'jelly.upload.temp' => array(
			'path' => JELLY_UPLOAD_TEMP,
			'web' => '/temp/',
		),
		'jelly.upload.servers' => array(
			'test_local' => array(
				'type' => 'local',
				'params' => array(
					'path' => JELLY_UPLOAD_TEST_LOCAL,
					'web' => 'upload',
				),
			),
			'default' => array(
				'type' => 'local',
				'params' => array(
					'path' => JELLY_UPLOAD_TEST_LOCAL,
					'web' => 'upload',
				),
			),			
		),

	);

	static public function setUpBeforeClass()
	{
		parent::setUpBeforeClass();
		
		if ( ! is_dir(JELLY_UPLOAD_LOCAL))
		{
			mkdir(JELLY_UPLOAD_LOCAL, 0777, true);	
		}
		if ( ! is_dir(JELLY_UPLOAD_TEST_LOCAL))
		{
			mkdir(JELLY_UPLOAD_TEST_LOCAL, 0777, true);	
		}			
	}	

	public function test_constructor()
	{
		$field = Jelly::field('upload', array(
			'server' => 'test_local'
		));
		$field->temp = Upload_Temp::factory();
		
		$this->assertInstanceOf('Upload_Server_Local', $field->server);
		$this->assertInstanceOf('Upload_Temp', $field->temp);
	}

	public function test_initialize()
	{
		$jelly = new Model_Test_Upload();

		$field = Jelly::field('upload', array('server' => 'test_local'));

		$field->initialize($jelly, 'file');
		$this->assertNotEmpty($field->rules);
	}


	public function provider_is_valid_upload()
	{
		return array(
			array( array(),                                                                                                               true,  null,                 true ),
			array( array('error' => 4, 'name' => 'test.txt', 'type' => 'test/plain', 'tmp_name' => '/tmp/file', 'size' => 4),             true,  null,                 true ),
			array( array('error' => UPLOAD_ERR_OK, 'name' => 'test.txt', 'type' => 'test/plain', 'tmp_name' => '/tmp/file', 'size' => 4), false, null,                 true ),
			array( array('error' => UPLOAD_ERR_OK, 'name' => 'test.txt', 'type' => 'test/plain', 'tmp_name' => '/tmp/file', 'size' => 4), true,  array('txt'),         false ),
			array( array('error' => UPLOAD_ERR_OK, 'name' => 'test.txt', 'type' => 'test/plain', 'tmp_name' => '/tmp/file', 'size' => 4), true,  array('html'),        true ),
			array( array('error' => UPLOAD_ERR_OK, 'name' => 'test.txt', 'type' => 'test/plain', 'tmp_name' => '/tmp/file', 'size' => 4), true,  array('txt', 'html'), false ),
			array( array('name' => 'test.txt', 'type' => 'test/plain', 'tmp_name' => '/tmp/file', 'size' => 4),                           true,  null,                 true ),
			array( array('error' => UPLOAD_ERR_OK, 'type' => 'test/plain', 'tmp_name' => '/tmp/file', 'size' => 4),                       true,  null,                 true ),
			array( array('error' => UPLOAD_ERR_OK, 'name' => 'test.txt', 'tmp_name' => '/tmp/file', 'size' => 4),                         true,  null,                 true ),
			array( array('error' => UPLOAD_ERR_OK, 'name' => 'test.txt', 'type' => 'test/plain', 'size' => 4),                            true,  null,                 true ),
			array( array('error' => UPLOAD_ERR_OK, 'name' => 'test.txt', 'type' => 'test/plain', 'tmp_name' => '/tmp/file'),              true,  null,                 true ),
		);
	}

	/**
	 * @dataProvider provider_is_valid_upload
	 */
	public function test_is_invalid_upload($file, $is_uploaded_file, $types, $is_invalid)
	{
		$tmp = $this->getMock('Upload_Temp', array('is_uploaded_file'));
		$tmp->expects($this->any())->method('is_uploaded_file')->will($this->returnValue($is_uploaded_file));
		$field = Jelly::field('upload', array('temp' => $tmp, 'types' => (array) $types));
		
		$model = Jelly::factory('Test_Upload');
		
		$this->assertEquals( ! $is_invalid, $field->check_valid_upload($file, 'file', Validation::factory(array()), $model ));
	}

	public function test_upload()
	{
		$file = array('error' => UPLOAD_ERR_OK, 'name' => 'upload_test.txt', 'type' => 'test/plain', 'tmp_name' => JELLY_UPLOAD_LOCAL.'/upload_test', 'size' => 4);

		file_put_contents($file['tmp_name'], 'data');

		$field = Jelly::field('upload', array(
			'server' => 'test_local'
		));
		$field->temp = Upload_Temp::factory();
		
		$field->temp->sequrity_check = FALSE;

		$jelly = new Model_Test_Upload();

		$validation = Validation::factory(array('file' => $file));
		$this->assertTrue($field->_upload( $validation, $jelly, 'file'));

		$this->assertFileExists($field->temp->file());
		unlink($field->temp->file());
	}

	public function test_upload_populate()
	{
		if ( ! is_dir(JELLY_UPLOAD_TEMP.'/populate'))
		{
			mkdir(JELLY_UPLOAD_TEMP.'/populate', 0777, TRUE);
		}
		file_put_contents(JELLY_UPLOAD_TEMP.'/populate/test_upload_populate.txt', 'data');

		$field = Jelly::field('upload');
		$field->temp = Upload_Temp::factory();
		
		$jelly = new Model_Test_Upload();

		$validation = Validation::factory(array('file' => 'populate/test_upload_populate.txt'));
		$this->assertTrue($field->_upload( $validation, $jelly, 'file'));

		$this->assertEquals("populate", $field->temp->key);
		$this->assertFileExists($field->temp->file());
	}


	public function test_upload_save()
	{
		$tmp = $this->getMock('Upload_Temp', array('is_uploaded_file'));
		$tmp->filename("test.txt");

		$field = Jelly::field('upload', array('temp' => $tmp));
		$jelly = new Model_Test_Upload();
		$this->assertEquals('test.txt', $field->save($jelly, 'test.txt', true));
	}

	public function test_delete_value()
	{
		$tmp = $this->getMock('Upload_Temp', array('is_uploaded_file'));

		$field = Jelly::field('upload', array('temp' => $tmp));
		$jelly = new Model_Test_Upload();
		$this->assertEquals('', $field->save($jelly, '', true));
	}



}