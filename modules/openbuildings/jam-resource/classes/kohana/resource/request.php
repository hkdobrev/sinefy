<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Resource_Request class
 *
 * @package    OpenBuildings/jam-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource_Request extends Kohana_Request {

	/**
	 * The name of the resource for the request
	 * @var string
	 */
	public $resource = NULL;

	public function __construct($uri, HTTP_Cache $cache = NULL, $injected_routes = array())
	{
		parent::__construct($uri, $cache, $injected_routes);

		if ( ! $this->_external AND $this->_route AND $this->_route->resource)
		{
			$this->resource = $this->_route->resource;
		}
	}

	/**
	 * The name of the resource associated with the request
	 * @return Resource
	 */
	public function resource()
	{
		return $this->resource ? Resource::get($this->resource)->param($this->param()) : NULL;
	}

}
