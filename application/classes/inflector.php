<?php defined('SYSPATH') OR die('No direct script access.');

class Inflector extends Kohana_Inflector {

	public static function humanize($str, $ucwords = FALSE)
	{
		$humanized = parent::humanize($str);
		return $ucwords ? ucwords($humanized) : $humanized;
	}

}
