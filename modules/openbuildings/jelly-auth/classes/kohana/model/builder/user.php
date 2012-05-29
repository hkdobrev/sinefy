<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Model_Builder_User extends Jelly_Builder
{
	public function unique_key($value)
	{
		return Valid::email($value) ? 'email' : parent::unique_key($value);
	}
}