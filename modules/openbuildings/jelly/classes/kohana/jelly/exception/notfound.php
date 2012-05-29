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
class Kohana_Jelly_Exception_NotFound extends Kohana_Exception {
	
	public $model;
	
	function __construct($message, $model, $fields = NULL)
	{
		$fields[':model'] = $this->model = $model;

		parent::__construct($message, $fields);
	}
}