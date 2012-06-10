<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Resource_Route class
 *
 * @package    OpenBuildings/jam-resource
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
	 * @param   $name         string  route name
	 * @param   $uri_callback string  URI pattern
	 * @param   $regex array  regex patterns for route keys
	 * @param   $resource     string  the nameresource for this route
	 * @return  Route
	 */
	public static function set($name, $uri_callback = NULL, $regex = NULL, $resource = NULL)
	{
		$route = parent::set($name, $uri_callback, $regex);

		if ( ! empty($resource))
		{
			$route->resource = $resource;
		}

		return $route;
	}

	/**
	 * The name of the resource which holds the route
	 * @var string
	 */
	public $resource = NULL;

	/**
	 * Get the resource for the route
	 * @return Resource
	 */
	public function resource()
	{
		return Resource::get($this->resource);
	}

}
