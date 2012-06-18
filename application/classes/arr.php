<?php defined('SYSPATH') OR die('No direct script access.');

class Arr extends Kohana_Arr {

	public static function get($array, $key, $default = NULL)
	{
		if (array_key_exists($key, $array)
			OR ($array instanceof ArrayAccess AND $array->offsetExists($key)))
			return $array[$key];

		return $default;
	}
}
