<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Resource_Routes class
 *
 * @package    OpenBuildings/http-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource_Routes {

	/**
	 * The format regex string for the routes
	 * @var string
	 */
	protected static $_format_regex = NULL;

	/**
	 * Factory for Resource_Routes
	 * @param  Resource $resource the resource for the routes
	 * @return Resource_Routes
	 */
	public static function factory($resource)
	{
		return new Resource_Routes($resource);
	}

	/**
	 * Get and cache the format regex depending on the configuration files for the module
	 * @return string
	 */
	public static function format_regex()
	{
		if (empty(Resource_Routes::$_format_regex))
		{
			Resource_Routes::$_format_regex = '('.implode('|', Resource::config('formats')).')';
		}
		return Resource_Routes::$_format_regex;
	}

	/** 
	 * @var Resource $resource the resource for the routes
	 */
	public $resource = NULL;

	/**
	 * Constructor for the Resource_Routes class.
	 * @param Resource $resource resource for the routes
	 */
	public function __construct($resource)
	{
		$this->resource = $resource;
	}

	/**
	 * Set the object route
	 * @return Resource_Route the Resource_Route object created
	 */
	public function set_object_route()
	{
		return $this->_set_route('object', $this->resource->type() === Resource::MULTIPLE ? '/<id>' : '');
	}

	/**
	 * Set the collection route
	 * @return Resource_Route the Resource_Route object created
	 */
	public function set_collection_route()
	{
		return $this->_set_route('collection');
	}

	/**
	 * Set a route from the given type and starting uri string.
	 * @param string $type 'object' or 'collection'
	 * @param string $uri  the uri to start with
	 * @return Resource_Route the created Resource_Route object
	 */
	protected function _set_route($type, $uri = '')
	{
		$actions = $this->resource->option($type.'_actions');
		$route_regex = array();
		$route_defaults = array(
			'controller'  => $this->resource->controller(),
			'action'      => $this->resource->option('default_actions.'.$type),
		);
		if (($parent = $this->resource->parent()) AND $parent->type() === Resource::MULTIPLE)
		{
			if ($parent->is_sluggable())
			{
				$route_regex['parent_id'] = Resource::config('slug_regex');
			}
			else
			{
				$route_regex['parent_id'] = Resource::config('positive_integer_regex');
			}
		}
		if ($this->resource->type() === Resource::MULTIPLE AND $type == 'object')
		{
			if ($this->resource->is_sluggable())
			{
				$route_regex['id'] = Resource::config('slug_regex');
			}
			else
			{
				$route_regex['id'] = Resource::config('positive_integer_regex');
			}
		}
		if ( ! empty($actions))
		{
			$uri .= '(/<action>)';
			$route_regex['action'] = '('.implode("|", (array) $actions).')';
		}
		if (Resource::config('format'))
		{
			$route_regex['format'] = Resource_Routes::format_regex();
			$route_defaults['format'] = Resource::config('format');
			$uri .= '(.<format>)';
		}

		return Route::set($type == 'object' ? Inflector::singular($this->resource->route_name()) : $this->resource->route_name(), $this->resource->option('prefix').$uri, $route_regex, $this->resource)
			->defaults($route_defaults);
	}
}