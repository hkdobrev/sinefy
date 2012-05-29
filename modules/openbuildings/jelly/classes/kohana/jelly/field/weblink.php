<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Handles web links.
 *
 * @package    Jelly
 * @category   Fields
 * @author     Ivan Kerin
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://www.opensource.org/licenses/isc-license.txt
 */
class Kohana_Jelly_Field_Weblink extends Jelly_Field_String {

	public $rules = array(array(
		'Valid::url'
	));

	/**
	 * Add http:// if it's not present upon save.
	 *
	 * @param  Jelly_Model $model
	 * @param  string $value
	 * @param  boolean $loaded
	 * @return string the new url
	 */
	public function set($value)
	{
		if ($value AND ! preg_match('|^http(s)?://|i', $value))
		{
			$value = "http://".$value;
		}

		return parent::set($value);
	}

} // End Jelly_Field_Weblink
