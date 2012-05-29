<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Validation methods specific for Sinefy or additional gereric validations.
 * @author Haralan Dobrev
 * @package Sinefy
 * @category  Kohana/Validation
 */
class Valid extends Kohana_Valid {

	public static function positive($value)
	{
		return Valid::digit($value) AND ((int) $value > 0);
	}

}
