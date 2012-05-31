<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Tests ManyToMany fields.
 *
 * @package Jam
 * @group   jam
 * @group   jam.taxonomy
 */
class Jam_Taxonomy_TaxonomyTest extends Unittest_Taxonomy_TestCase {

	/**
	 * Provider for test_builder
	 */
	public function provider_builder()
	{
		return array(
			array(array('test_term', 1, 'test_taxonomy_posts'), 2),
			array(array('test_term', 2, 'test_taxonomy_posts'), 1),
			array(array('test_term', 2, 'test_taxonomy_authors'), 0),
			array(array('test_term', 3, 'test_taxonomy_authors'), 1),

			array(array('test_taxonomy_post', 1, 'types'), 2),
			array(array('test_taxonomy_post', 2, 'types'), 1),
			array(array('test_taxonomy_author', 1, 'styles'), 1),
			array(array('test_taxonomy_author', 2, 'styles'), 0),

			array(array('test_term', 555, 'test_taxonomy_posts'), 0),
		);
	}
	
	/**
	 * Tests Jam_Field_ManyToMany::builder()
	 * 
	 * @dataProvider  provider_builder
	 */
	public function test_builder($builder, $count)
	{
		$builder = Jam::factory($builder[0], $builder[1])->builder($builder[2]);
		$this->assertInstanceOf('Jam_Builder', $builder);
		
		// Select the result
		$result = $builder->select();
		
		// Should now be a collection
		$this->assertInstanceOf('Jam_Collection', $result);
		$this->assertEquals($count, $result->count());
		
		foreach ($result as $row)
		{
			$this->assertGreaterThan(0, $row->id());
			$this->assertTrue($row->loaded());
		}
	}

	public function test_add()
	{
		$post = Jam::factory('test_taxonomy_post', 1);
		$types = $post->types;
		$type = Jam::factory('test_term')->set(array('name' => 'New Type', 'vocabulary_id' => 1))->save();

		$this->assertCount(2, $types);

		$types->add($type);
		$this->assertCount(3, $types);
		$this->assertTrue($types->exists($type));

		$post->save();

		$new_types = Jam::factory('test_taxonomy_post', 1)->types;
		$this->assertCount(3, $new_types);
		$this->assertTrue($types->exists($type));
	}

	public function test_remove()
	{
		$post = Jam::factory('test_taxonomy_post', 1);
		$types = $post->types;
		$type = Jam::factory('test_term', 1);
		
		$this->assertCount(2, $types);
		
		$types->remove($type);
		$this->assertCount(1, $types);

		$this->assertFalse($types->exists($type));
		$post->save();

		$new_types = Jam::factory('test_taxonomy_post', 1)->types;
		$this->assertCount(1, $new_types);
		$this->assertFalse($types->exists($type));
	}

	public function test_build()
	{
		$post = Jam::factory('test_taxonomy_post', 1);

		$new_term = $post->types->build(array('name' => 'new', 'vocabulary_id' => 1));
		$this->assertTrue($post->types->exists($new_term));
		$post->save();

		$this->assertTrue(Jam::factory('test_taxonomy_post', 1)->types->exists($new_term));
	}

	public function test_create()
	{
		$post = Jam::factory('test_taxonomy_post', 1);

		$new_term = $post->types->create(array('name' => 'new', 'vocabulary_id' => 1));
		$this->assertTrue($post->types->exists($new_term));
		$post->save();

		$this->assertTrue(Jam::factory('test_taxonomy_post', 1)->types->exists($new_term));
	}

	public function test_exists()
	{
		$post = Jam::factory('test_taxonomy_post', 1);
		$term = Jam::factory('test_term', 1);
		$other_term = Jam::factory('test_term', 4);

		$this->assertTrue($post->types->exists($term), 'Should have term in types collection');
		$this->assertFalse($post->types->exists($other_term), 'Should not have other_term in types collection');
	}

	public function test_mass_assignment()
	{
		$post = Jam::factory('test_taxonomy_post', 1);

		$post->types = array(
			array('name' => 'new name 1'),
			array('name' => 'new name 2'),
			array('id' => 1, 'name' => 'new name 3'),
			array('name' => 'Page')
		);
		$post->check();

		$this->assertCount(4, $post->types);
		$this->assertEquals('new name 1', $post->types[0]->name());
		$this->assertEquals('new name 2', $post->types[1]->name());
		$this->assertEquals('new name 3', $post->types[2]->name());

		$this->assertEquals(1, $post->types[2]->id());
		$this->assertEquals(2, $post->types[3]->id());

		$this->assertEquals('Types', $post->types[0]->vocabulary->name());
		$this->assertEquals('Types', $post->types[1]->vocabulary->name());

		$post->save();

		$post = Jam::factory('test_taxonomy_post', 1);
		$this->assertCount(4, $post->types);
		$this->assertEquals('new name 1', $post->types[2]->name());
		$this->assertEquals('new name 2', $post->types[3]->name());
		$this->assertEquals('new name 3', $post->types[0]->name());
		$this->assertEquals('Types', $post->types[2]->vocabulary->name());
		$this->assertEquals('Types', $post->types[3]->vocabulary->name());
		$this->assertEquals(1, $post->types[0]->id());
		$this->assertEquals(2, $post->types[1]->id());

		$this->assertEquals('new name 3', Jam::factory('test_term', 1)->name());
	}
}

