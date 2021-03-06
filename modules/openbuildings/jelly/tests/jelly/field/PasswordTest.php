<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Tests password fields.
 *
 * @package Jelly
 * @group   jelly
 * @group   jelly.field
 * @group   jelly.field.password
 */
class Jelly_Field_PasswordTest extends Unittest_TestCase {

	/**
	 * Tests that passwords are not re-hashed accidentally.
	 * 
	 * Addresses issue #8
	 */
	public function test_change_password()
	{
		$model = Jelly::factory('test_author');

		// Set the password, which should be hashed on save()
		$model->password = 'abc';
		$model->save();

		// The password should match this sha1 hash
		$this->assertSame('a9993e364706816aba3e25717850c26c9cd0d89d', $model->password);
		
		// Ensure it's not re-hashed when retrieving
		$this->assertSame('a9993e364706816aba3e25717850c26c9cd0d89d', Jelly::factory('test_author', $model->id)->password);

		// Test updates now
		$model->password = '12345';
		$model->save();

		// The password should match this sha1 hash
		$this->assertSame('8cb2237d0679ca88db6464eac60da96345513964', $model->password);

		// Cleanup
		$model->delete();
	}
}



