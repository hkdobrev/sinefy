<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Resource_Jelly_Exception_Notfound class
 * Jelly NotFound Exception
 *
 * @package    OpenBuildings/http-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource_Jelly_Exception_NotFound extends Resource_Exception {
	
	public $model;
	
	function __construct($message, $model, $fields = NULL)
	{
		$this->model = $model;
		parent::__construct($message, Arr::merge(array(':model' => Inflector::humanize(Jelly::model_name($model))), (array) $fields));
	}
}