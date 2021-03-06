<?php defined('SYSPATH') OR die('No direct access allowed.'); 

class Model_Jamaker_Image extends Jelly_Model {

	static public function initialize(Jelly_Meta $meta)
	{
		$meta->db(Unittest_Jamaker_TestCase::$database_connection);

		$meta->associations(array(
			'creator' => Jelly::association('belongsto', array('foreign' => 'jamaker_user', 'inverse_of' => 'images_created', 'column' => 'creator_id')),
			'account' => Jelly::association('belongsto', array('foreign' => 'jamaker_account', 'inverse_of' => 'images', 'column' => 'account_id')),
		));

		$meta->fields(array(
			'id' => Jelly::field('primary'),
			'file' => Jelly::field('string'),
		));
	}
}