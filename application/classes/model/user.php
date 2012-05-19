<?php defined('SYSPATH') OR die('No direct script access.');

class Model_User extends ORM {

	protected $_has_many = array(
		'movies' => array(
			'through' => 'movies_users'
		)
	);
}


