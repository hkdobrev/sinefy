<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Tests for Jelly_Collection.
 *
 * @package Jelly
 * @group   jelly
 * @group   jelly.deep
 */
class Jelly_deepTest extends Unittest_Jelly_TestCase {

	public function test_association_create()
	{
		$author = Jelly::build('test_author', array('name' => 'Joe'));
		$author->test_posts = array(
			Jelly::build('test_post', array(
				'name' => 'hardware',
				'test_categories' => array(
					Jelly::build('test_category', array('name' => 'cat1', 'test_author' => $author)),
					Jelly::build('test_category', array('name' => 'cat2', 'test_author' => $author)),
				)
			)),
			Jelly::build('test_post', array(
				'name' => 'software',
				'test_categories' => array(
					Jelly::build('test_category', array('name' => 'cat1', 'test_author' => $author)),
					Jelly::build('test_category', array('name' => 'cat2', 'test_author' => $author)),
				)
			)),
		);

		$this->assertSame($author, $author->test_posts[0]->test_categories[0]->test_author, 'Should be the same object');

		$author->save();
		
		$author = Jelly::query('test_author')->where('name', '=', 'Joe')->find();

		$this->assertEquals($author->id(), $author->test_posts[0]->test_categories[0]->test_author->id(), 'Should be the same author');
		$this->assertEquals($author->id(), $author->test_posts[0]->test_categories[1]->test_author->id(), 'Should be the same author');
		$this->assertEquals($author->id(), $author->test_posts[1]->test_categories[0]->test_author->id(), 'Should be the same author');
		$this->assertEquals($author->id(), $author->test_posts[1]->test_categories[1]->test_author->id(), 'Should be the same author');

	}
}