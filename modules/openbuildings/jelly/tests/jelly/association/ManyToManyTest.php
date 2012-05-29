<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Tests ManyToMany fields.
 *
 * @package Jelly
 * @group   jelly
 * @group   jelly.association
 * @group   jelly.association.many_to_many
 */
class Jelly_Association_ManyToManyTest extends Unittest_Jelly_TestCase {

	/**
	 * Provider for test_builder
	 */
	public function provider_builder()
	{
		return array(
			array(array('test_post', 1, 'test_categories'), 3),
			array(array('test_post', 2, 'test_categories'), 1),
			array(array('test_post', 555, 'test_categories'), 0),
		);
	}
	
	/**
	 * Tests Jelly_Field_ManyToMany::builder()
	 * 
	 * @dataProvider  provider_builder
	 */
	public function test_builder($args, $count)
	{
		$builder = Jelly::factory($args[0], $args[1])->builder($args[2]);

		$this->assertInstanceOf('Jelly_Builder', $builder);
		
		// Select the result
		$result = $builder->select();
		
		// Should now be a collection
		$this->assertInstanceOf('Jelly_Collection', $result);
		$this->assertEquals($count, $result->count());
		
		foreach ($result as $row)
		{
			$this->assertGreaterThan(0, $row->id());
			$this->assertTrue($row->loaded());
		}
	}

	public function test_add()
	{
		$post = Jelly::factory('test_post', 1);
		$categories = $post->test_categories;
		$category = Jelly::factory('test_category')->set(array('name' => 'New Tag', 'parent_id' => 0))->save();

		$this->assertCount(3, $categories);

		$categories->add($category);
		$this->assertCount(4, $categories);
		$this->assertTrue($categories->exists($category));

		$post->save();

		$new_categories = Jelly::factory('test_post', 1)->test_categories;
		$this->assertCount(4, $new_categories);
		$this->assertTrue($categories->exists($category));
	}

	public function test_remove()
	{
		$post = Jelly::factory('test_post', 1);
		$categories = $post->test_categories;
		$category = Jelly::factory('test_category', 1);

		$this->assertCount(3, $categories);

		$categories->remove($category);
		$this->assertCount(2, $categories);

		$this->assertFalse($categories->exists($category));
		$post->save();

		$new_categories = Jelly::factory('test_post', 1)->test_categories;
		$this->assertCount(2, $new_categories);
		$this->assertFalse($categories->exists($category));
	}

	public function test_build()
	{
		$post = Jelly::factory('test_post', 1);

		$new_category = $post->test_categories->build(array('name' => 'new', 'parent_id' => 0));
		$this->assertTrue($post->test_categories->exists($new_category));
		$post->save();

		$this->assertTrue(Jelly::factory('test_post', 1)->test_categories->exists($new_category));
	}

	public function test_create()
	{
		$post = Jelly::factory('test_post', 1);

		$new_category = $post->test_categories->create(array('name' => 'new', 'parent_id' => 0));
		$this->assertTrue($post->test_categories->exists($new_category));
		$post->save();

		$this->assertTrue(Jelly::factory('test_post', 1)->test_categories->exists($new_category));
	}

	public function test_exists()
	{
		$post = Jelly::factory('test_post', 1);
		$category = Jelly::factory('test_category', 1);
		$other_category = Jelly::factory('test_category', 4);

		$this->assertTrue($post->test_categories->exists($category), 'Should have category in test_categories collection');
		$this->assertFalse($post->test_categories->exists($other_category), 'Should not have tag in test_categories collection');

		$this->assertTrue($post->test_categories->exists('Category One'), 'Should have category in test_categories collection');
		$this->assertFalse($post->test_categories->exists('Category Four'), 'Should not have tag in test_categories collection');
	}

	public function test_delete()
	{
		$test_category = Jelly::factory('test_category', 1);
		$test_category_id = $test_category->id();
		$test_posts_ids = $test_category->test_posts->as_array(NULL, 'id');

		$test_category->delete();
		$this->assertNotExists('test_category', $test_category_id, 'Category should be deleted');
		$this->assertExists('test_post', $test_posts_ids, 'Posts for the category should not be deleted');
		$this->assertNull(Jelly::factory('test_post', $test_posts_ids[0])->test_categories->search($test_category_id), 'Relations between the posts and the categories should be deleted');
	}

	public function test_mass_assignment()
	{
		$post = Jelly::factory('test_post', 1);
		$post->test_categories = array(
			array('name' => 'new name 1', 'parent_id' => 0),
			array('name' => 'new name 2', 'parent_id' => 0),
			array('id' => 1, 'name' => 'new name 3'),
			'',
			'' => '',
		);

		$this->assertCount(3, $post->test_categories);
		$this->assertEquals('new name 1', $post->test_categories[0]->name);
		$this->assertEquals('new name 2', $post->test_categories[1]->name);
		$this->assertEquals('new name 3', $post->test_categories[2]->name);
		$this->assertEquals(1, $post->test_categories[2]->id());

		$post->save();

		$post = Jelly::factory('test_post', 1);
		
		$this->assertCount(3, $post->test_categories);
		$this->assertEquals('new name 3', $post->test_categories[0]->name);
		$this->assertEquals('new name 1', $post->test_categories[1]->name);
		$this->assertEquals('new name 2', $post->test_categories[2]->name);
		$this->assertEquals(1, $post->test_categories[0]->id());

		$this->assertEquals('new name 3', Jelly::factory('test_category', 1)->name());
	}

	public function test_required()
	{
		$blog = Jelly::factory('test_blog')->set(array(
			
		));
	}
}

