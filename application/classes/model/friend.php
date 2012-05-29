<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Friend extends Jelly_Model {
	protected $_belongs_to = array(
		'user' => array()
	);
}
