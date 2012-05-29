<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Tests for Jelly_Builder SELECT functionality.
 *
 * @package Jelly
 * @group   jelly
 * @group   jelly.behavior
 * @group   jelly.behavior.paranoid
 */
class Jelly_Behavior_ParanoidTest extends Unittest_Jelly_TestCase {

	
	public function test_select()
	{
		$normal = Jelly::factory('test_video', 1);

		$this->assertTrue($normal->loaded());

		$deleted = Jelly::factory('test_video', 3);
		$this->assertFalse($deleted->loaded());

		$this->assertCount(2, Jelly::query('test_video')->select_all());
		$this->assertCount(3, Jelly::query('test_video')->deleted(Jelly_Behavior_Paranoid::ALL)->select_all());
		$this->assertCount(1, Jelly::query('test_video')->deleted(Jelly_Behavior_Paranoid::DELETED)->select_all());
	}

	public function test_set()
	{
		$video = Jelly::factory('test_video', 1);

		$video->delete();

		$this->assertCount(1, Jelly::query('test_video')->select_all());
		$this->assertCount(3, Jelly::query('test_video')->deleted(Jelly_Behavior_Paranoid::ALL)->select_all());
		$this->assertCount(2, Jelly::query('test_video')->deleted(Jelly_Behavior_Paranoid::DELETED)->select_all());

		$video = Jelly::query('test_video')->deleted(Jelly_Behavior_Paranoid::ALL)->key(1)->select();

		$video->restore_delete();

		$this->assertCount(2, Jelly::query('test_video')->select_all());
		$this->assertCount(3, Jelly::query('test_video')->deleted(Jelly_Behavior_Paranoid::ALL)->select_all());
		$this->assertCount(1, Jelly::query('test_video')->deleted(Jelly_Behavior_Paranoid::DELETED)->select_all());

		$video->real_delete();

		$this->assertCount(1, Jelly::query('test_video')->select_all());
		$this->assertCount(2, Jelly::query('test_video')->deleted(Jelly_Behavior_Paranoid::ALL)->select_all());
		$this->assertCount(1, Jelly::query('test_video')->deleted(Jelly_Behavior_Paranoid::DELETED)->select_all());
	}
} // End Jelly_Builder_SelectTest