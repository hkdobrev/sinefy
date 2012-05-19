<?php defined('SYSPATH') OR die('No direct script access.');

class Inflector extends Kohana_Inflector {

	public static function humanize($str)
	{
		return ucwords(parent::humanize($str));
	}

}
