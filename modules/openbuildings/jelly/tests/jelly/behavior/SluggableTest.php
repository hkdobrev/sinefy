<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Tests for Jelly_Builder SELECT functionality.
 *
 * @package Jelly
 * @group   jelly
 * @group   jelly.behavior
 * @group   jelly.behavior.sluggable
 */
class Jelly_Behavior_SluggableTest extends Unittest_Jelly_TestCase {

	public function test_set_no_primary_key()
	{
		$tag = Jelly::factory('test_tag', 1);

		$this->assertNotNull($tag->slug);

		$tag->name = ' new tag j320&lt';
		$tag->save();

		$this->assertEquals('new-tag-j320lt', $tag->slug);
	}

	public function test_select_no_primary_key()
	{
		$this->setExpectedException('Jelly_Exception_NotFound');
		Jelly::query('test_tag')->find_by_slug_insist('-j320lt');
	}

	public function test_set()
	{
		$video = Jelly::factory('test_video', 1);

		$this->assertNotNull($video->slug);

		$video->name = 'new video.png';

		$slug = $video->build_slug();
		$this->assertEquals('new-videopng-1', $slug, 'Should have a method build_slug() that builds the correct slug');
		
		$video->save();

		$this->assertEquals('new-videopng-1', $video->slug);
	}

	public function test_select()
	{
		$this->setExpectedException('Jelly_Exception_Sluggable');
		Jelly::query('test_video')->find_by_slug_insist('video-jp2g-1');
	}

	public function provider_pattern()
	{
		return array(
			array('video-', FALSE),
			array('', FALSE),
			array('video', FALSE),
			array('pv3m-34-43mg', FALSE),
			array('video-1', TRUE),
		);
	}

	/**
	 * @dataProvider provider_pattern
	 * @return NULL
	 */
	public function test_where_pattern($pattern, $correct)
	{
		if ( ! $correct)
		{
			$this->setExpectedException('Kohana_Exception');
		}
		Jelly::query('test_video')->where_slug($pattern);
	}

	/**
	 * @dataProvider provider_pattern
	 * @return NULL
	 */
	public function test_find($pattern, $correct)
	{
		if ( ! $correct)
		{
			$this->setExpectedException('Kohana_Exception');
		}
		Jelly::query('test_video')->find_by_slug($pattern);
	}

} // End Jelly_Builder_SelectTest