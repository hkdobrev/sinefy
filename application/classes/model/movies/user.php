<?php defined('SYSPATH') or die('No direct access allowed!'); 

class Model_Movies_User extends ORM {
	protected $_belongs_to = array(
		'user' => array(),
		'movie'	=> array()
	);
}