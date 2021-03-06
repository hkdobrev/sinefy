<?php defined('SYSPATH') OR die('No direct access allowed.'); 

class Model_Test_User extends Kohana_Model_User {

	static public function initialize(Jelly_Meta $meta)
	{
		$meta->db(Unittest_Auth_Testcase::$database_connection);

		parent::initialize($meta);

		$meta->associations(array(
			'user_tokens' => Jelly::association('hasmany', array('foreign' => 'test_user_token.test_user_id')),
			'roles' => Jelly::association('manytomany', array(
				'foreign' => 'test_role.id', 
				'through' => array(
					'model' => 'test_roles_users',
					'fields' => array(
						'our' => 'test_user_id',
						'foreign' => 'test_role_id'
					)
				)
			)),
		));
	}
}