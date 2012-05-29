<?php defined('SYSPATH') OR die('No direct access allowed.'); 

/**
 * Resource_Jelly_Exception_Sluggable class
 * Jelly Sluggable Exception
 *
 * @package    OpenBuildings/http-resource
 * @author     Yasen Yanev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource_Jelly_Exception_Sluggable extends Resource_Exception {
	
	public $slug;
	public $model;

	function __construct($message, $model, $slug = NULL, $fields = NULL)
	{
		$this->slug = $slug;
		$this->model = $model;
		
		parent::__construct($message, $fields);
	}
}