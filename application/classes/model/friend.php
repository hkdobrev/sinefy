<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Friend extends ORM {
	protected $_belongs_to = array(
		'user' => array()
	);
}