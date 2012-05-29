<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Tests for Jelly_Builder SELECT functionality.
 *
 * @package Jelly
 * @group   jelly
 * @group   jelly.behavior
 * @group   jelly.behavior.sortable
 */
class Jelly_Behavior_SortableTest extends Unittest_Jelly_TestCase {

	
	public function test_set()
	{
		$last = Jelly::factory('test_video', 1);
		$new = Jelly::factory('test_video')->set('name', 'file3.jpg')->save();

		$this->assertGreaterThan($last->position, $new->position);
	}

	public function test_order()
	{
		$videos = Jelly::query('test_video')->select_all();

		$this->assertEquals(0, $videos[0]->position);
		$this->assertEquals(1, $videos[1]->position);
	}

} // End Jelly_Builder_SelectTest