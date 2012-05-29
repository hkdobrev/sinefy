<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Tests for core Jelly methods.
 * @group jelly
 * @group jelly.field
 * @group jelly.field.upload_image
 * @package Jelly
 */
if ( ! defined("JELLY_UPLOAD_TEMP"))
	define("JELLY_UPLOAD_TEMP", MODPATH . "extensions/jelly/tests/test_data/temp");
	
if ( ! defined("JELLY_UPLOAD_TEST_LOCAL"))
	define("JELLY_UPLOAD_TEST_LOCAL", MODPATH . "extensions/jelly/tests/test_data/test_local");

class Jelly_Field_Upload_ImageTest extends Unittest_TestCase {

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
		),
	);

	static public function setUpBeforeClass()
	{
		parent::setUpBeforeClass();
		
		if ( ! is_dir(JELLY_UPLOAD_LOCAL))
		{
			mkdir(JELLY_UPLOAD_LOCAL, 0777, true);	
		}
	}	

	public function test_test()
	{
		
	}
	

}