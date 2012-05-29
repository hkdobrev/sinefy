<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Resource_Route class
 *
 * @package    OpenBuildings/http-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource_Route extends Kohana_Route {

	/**
	 * Stores a named route and returns it. The "action" will always be set to
	 * "index" if it is not defined.
	 *
	 *     Route::set('default', '(<controller>(/<action>(/<id>)))')
	 *         ->defaults(array(
	 *             'controller' => 'welcome',
	 *         ));
	 *
	 * @param   string   route name
	 * @param   string   URI pattern
	 * @param   array    regex patterns for route keys
	 * @param   Resource the resource for this route
	 * @return  Route
	 */
	public static function set($name, $uri_callback = NULL, $regex = NULL, $resource = NULL)
	{
		$route = parent::set($name, $uri_callback, $regex);

		if ( ! empty($resource))
		{
			$route->_resource = $resource;
		}

		return $route;
	}

	protected $_resource = NULL;

	/**
	 * Get the resource for the route
	 * @return Resource
	 */
	public function resource()
	{
		return $this->_resource;
	}

}