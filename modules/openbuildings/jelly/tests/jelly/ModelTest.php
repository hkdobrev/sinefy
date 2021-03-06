<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Tests for Jelly_Model functionality.
 *
 * @package Jelly
 * @group   jelly
 * @group   jelly.model
 */
class Jelly_ModelTest extends Unittest_Jelly_TestCase {

	/**
	 * Provider for test_save_empty_model
	 */
	public function provider_save_empty_model()
	{
		return array(
			array(Jelly::factory('test_author')),
			array(Jelly::factory('test_category')),
		);
	}
	
	/**
	 * Tests that empty models can be saved with nothing set on them.
	 * This should work for every model that has no rules that require
	 * data to be set on them, since Jelly properly manages NULLs and
	 * default values.
	 * 
	 * @dataProvider  provider_save_empty_model
	 */
	public function test_save_empty_model($model)
	{
		$model->save();
		
		// Model should be saved, loaded, and have an id
		$this->assertTrue($model->saved());
		$this->assertTrue($model->loaded());
		$this->assertGreaterThan(0, $model->id);
		
		// Cleanup
		$this->assertTrue($model->delete());
	}
	
	/**
	 * Tests that primary keys can be changed or set manually.
	 *
	 * We don't put this in the PrimaryTest because it has more
	 * to do with how the model handles it than the field.
	 */
	public function test_save_primary_key()
	{
		$model = Jelly::factory('test_post');
		$model->id = 9000;
		$model->save();

		// Verify data is as it should be
		$this->assertTrue($model->saved());
		$this->assertEquals(9000, $model->id);

		// Verify the record actually exists in the database
		$this->assertTrue(Jelly::factory('test_post', 9000)->loaded());

		// Manually re-selecting so that Postgres doesn't cause errors down the line
		$model = Jelly::factory('test_post', 9000);

		// Change it again so we can verify it works on UPDATE as well
		// This is key because Jelly got this wrong in the past
		$model->id = 9001;
		$model->save();

		// Verify we can't find the old record 9000
		$this->assertFalse(Jelly::factory('test_post', 9000)->loaded());

		// And that we can find the new 9001
		$this->assertTrue(Jelly::factory('test_post', 9001)->loaded());

		// Cleanup
		Jelly::factory('test_post', 9001)->delete();
	}

	/**
	 * Provider for test_state
	 */
	public function provider_state()
	{
		return array(
			array(Jelly::factory('test_alias'), FALSE, FALSE, FALSE),
			array(Jelly::factory('test_alias')->set('name', 'Test'), FALSE, FALSE, TRUE),
			array(Jelly::factory('test_alias')->load_values(array('name' => 'Test')), TRUE, TRUE, FALSE),
			array(Jelly::factory('test_alias')->load_values(array('name' => 'Test'))->set('name', 'Test'), TRUE, TRUE, FALSE),
			array(Jelly::factory('test_alias')->load_values(array('name' => 'Test'))->set('name', 'Test2'), TRUE, FALSE, TRUE),
			array(Jelly::factory('test_alias')->set('name', 'Test')->clear(), FALSE, FALSE, FALSE),
			array(Jelly::factory('test_alias')->load_values(array('name' => 'Test'))->clear(), FALSE, FALSE, FALSE),
		);
	}

	/**
	 * Tests the various states a model may have are set properly.
	 *
	 * The states are access with Jelly_Model::loaded(),
	 * Jelly_Model::saved(), and Jelly_Model::changed().
	 *
	 * @dataProvider  provider_state
	 */
	public function test_state($model, $loaded, $saved, $changed)
	{
		$this->assertSame($model->loaded(), $loaded);
		$this->assertSame($model->saved(), $saved);
		$this->assertSame($model->changed(), $changed);
	}

	/**
	 * Provider for test_original
	 */
	public function provider_original()
	{
		// Create a mock model for most of our tests
		$alias = Jelly::factory('test_alias')
			->load_values(array(
				'id'          => 1,
				'name'        => 'Test',
				'description' => 'Description',
			))->set(array(
				'id'          => 2,
				'name'        => 'Test2',
				'description' => 'Description2',
			));

		// Test without changes
		return array(
			array($alias, '_id', 1),
			array($alias, 'name', 'Test'),
			array($alias, 'description', 'Description'),
		);
	}

	/**
	 * Tests Jelly_Model::original()
	 *
	 * @dataProvider provider_original
	 */
	public function test_original($model, $field, $expected)
	{
		$this->assertSame($model->original($field), $expected);
	}

	/**
	 * Provider for test_changed
	 */
	public function provider_changed()
	{
		// Create a mock model for most of our tests
		$alias = Jelly::factory('test_alias')
			->load_values(array(
				'id'          => 1,
				'name'        => 'Test',
				'description' => 'Description',
			))->set(array(
				'id'          => 2,
				'name'        => 'Test2',
				'description' => 'Description',
			));

		// Test without changes
		return array(
			array($alias, '_id', TRUE),
			array($alias, 'name', TRUE),
			array($alias, 'description', FALSE),
		);
	}

	/**
	 * Tests Jelly_Model::changed()
	 *
	 * @dataProvider provider_changed
	 */
	public function test_changed($model, $field, $expected)
	{
		$this->assertSame($model->changed($field), $expected);
	}

	/**
	 * Tests Jelly_Model::clear()
	 */
	public function test_clear()
	{
		// Empty model to compare
		$one = Jelly::factory('test_alias');

		// Set and cleared model
		$two = Jelly::factory('test_alias')
			->load_values(array(
				'id'          => 1,
				'name'        => 'Test',
				'description' => 'Description',
			))->set(array(
				'id'          => 2,
				'name'        => 'Test2',
				'description' => 'Description2',
			))->clear();

		// They should match in a non-strict sense
		$this->assertEquals($one, $two);
	}

	public function test_check()
	{
		$video = Jelly::factory('test_video', 1);
		$this->assertTrue($video->check());
		$video->file = '111';
		$this->assertFalse($video->check());

		$this->setExpectedException('Jelly_Validation_Exception');
		$video->check_insist();
	}
}