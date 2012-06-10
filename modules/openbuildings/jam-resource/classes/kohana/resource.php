<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Resource class
 *
 * @package    OpenBuildings/jam-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource {

	const MULTIPLE = 'multiple';

	const SINGULAR = 'singular';

	/**
	 * @var  bool Indicates whether resources are cached
	 */
	public static $cache = FALSE;

	/**
	 * Holds an instance of the driver depending on the configuration
	 * @var Resource_Driver
	 */
	protected static $_driver = NULL;

	/**
	 * All the created resources.
	 * @var array
	 */
	protected static $_resources = array();

	/**
	 * The format regex string for the routes
	 * @var string
	 */
	protected static $_format_regex = NULL;

	/**
	 * Get a configuration option from the jam-resource config using dot notation.
	 * 
	 * Usage:
	 * 		$common_object_actions = Resource::config('common_actions.object');
	 * 
	 * @param  string $path the string to look for in the config
	 * @return mixed the value of the configuration option
	 * @uses Arr::path for the dot notation support
	 */
	public static function config($path = NULL)
	{
		return Kohana::$config->load('jam-resource'.( $path ? '.'.$path : ''));;
	}

	/**
	 * Get a single resource by name.
	 * @param  string $resource_name the resource name
	 * @return Resource
	 * @throws Resource_Exception_Notfound If the resource is not found
	 */
	public static function get($resource_name)
	{
		if ( ! ($resource = Arr::get(Resource::all(), $resource_name)))
			throw new Resource_Exception_Notfound('Could not find resource :resource!', array(
				':resource' => $resource_name
			));

		return $resource;
	}

	/**
	 * Retrieves all named resources.
	 *
	 *     $resources = Resource::all();
	 *
	 * @return  array  resources by name
	 */
	public static function all()
	{
		return Resource::$_resources;
	}

	/**
	 * Generate an URL for the specified arguments.
	 * Arguments could be model objects, strings, arrays or booleans.
	 * Model objects are resolved to strings and route params are set from them - slugs or primary keys.
	 * Arrays are used as additional route params.
	 * Booleans are used for protocols. Protocols could be defined with 'protocol' key in arrays too.
	 * 
	 * Usage:
	 * 		Resource::url($user, 'images', array('action' => 'more'), TRUE); // /users/some-user-123/images/more
	 * 		
	 * 	If model objects are given as arguments their name is used in singular form.
	 * 	If collection objects are given as arguments their name is used in plural form.
	 * 	
	 * 	The point is to generate a correct route name, then select the route and get the resource associated with the route.
	 * 
	 * @return string
	 */	
	public static function url()
	{
		$arguments = func_get_args();
		return Resource::_url($arguments);
	}

	/**
	 * Get the resource associated with the route of the current request.
	 * Also set the route params as params to the resource so they could be used in selecting a collection or an object for the resource.
	 * @return Resource
	 */
	public static function current()
	{
		$current_request = Request::current();
		return $current_request->resource()
			->param($current_request->param());
	}

	/**
	 * Set routes and nested resources based on the models
	 * 
	 * Usage: 
	 * 
	 * 		Resource::set('users', array('object_actions' => array('password', 'forgotten_password'), 'children' => array(
	 *
	 *	  	// the name of the child model
	 *	  	'clipping' => array(
	 *
	 *	  			// Controller for this child model object
	 *		  			'controller' => 'clippings',
	 *		  			
	 *		  			// The collection path string
	 *			  		'path_string' => 'clippings',
	 *
	 *			  		// Model for this route
	 *			  		'model' => 'clipping'
	 *		  		)
	 *		  	));
	 * @param string $model   the name of the model
	 * @param array $options array of options - see the usage description
	 * @param string $parent the name of the parent route
	 */
	public static function set($name, array $options = array(), $parent = NULL)
	{
		$resource = new Resource($name, $options, $parent);
		return Resource::$_resources[$resource->name()] = $resource;
	}

	/**
	 * Saves or loads the resource cache. If your resources will remain the same for
	 * a long period of time, use this to reload the resources from the cache
	 * rather than redefining them on every page load.
	 *
	 *     if ( ! Resource::cache())
	 *     {
	 *         // Set resources here
	 *         Resource::cache(TRUE);
	 *     }
	 *
	 * @param   boolean   cache the current resources
	 * @return  void      when saving resources
	 * @return  boolean   when loading resources
	 * @uses    Kohana::cache
	 */
	public static function cache($save = FALSE)
	{
		if ($save === TRUE)
		{
			// Cache all defined resources
			Kohana::cache('Resource::cache()', Resource::$_resources);
		}
		else
		{
			if ($resources = Kohana::cache('Resource::cache()'))
			{
				Resource::$_resources = $resources;

				// Resources were cached
				return Resource::$cache = TRUE;
			}
			else
			{
				// Resources were not cached
				return Resource::$cache = FALSE;
			}
		}
	}

	/**
	 * Get the cached driver instance or create it if it's not available.
	 * @return [type]
	 */
	public static function driver()
	{
		if (empty(Resource::$_driver))
		{
			Resource::$_driver = Resource_Driver::factory(Resource::config('driver'));
		}
		return Resource::$_driver;
	}

	/**
	 * Parse arguments and generates url. Used in Resource::url()
	 * @param  array $arguments The arguments to parse
	 * @return string the generated url
	 */
	protected static function _url($arguments)
	{
		$protocol = NULL;
		$params = array();
		$strings = array();
		foreach ($arguments as $i => $argument)
		{
			if (is_string($argument))
			{
				$strings[] = $argument;
				Resource::driver()->set_key($params);
			}
			elseif (is_object($argument))
			{
				$strings[] = Resource::driver()->parse_object($argument, $params);
			}
			elseif (is_array($argument)) 
			{
				$params = Arr::merge($params, $argument);	
			}
			elseif (is_bool($argument) OR is_null($argument))
			{
				$protocol = $argument;
			}
		}
		$protocol = Arr::get($params, 'protoctol', $protocol);
		return Route::url(implode('_', $strings), $params, $protocol);
	}

	/**
	 * Get and cache the format regex depending on the configuration files for the module
	 * @return string
	 */
	public static function format_regex()
	{
		if (empty(Resource::$_format_regex))
		{
			Resource::$_format_regex = '('.implode('|', Resource::config('formats')).')';
		}
		return Resource::$_format_regex;
	}

	/**
	 * Get and cache the format regex depending on the configuration files for the module
	 * @return string
	 */
	public static function format_regex()
	{
		if (empty(Resource::$_format_regex))
		{
			Resource::$_format_regex = '('.implode('|', Resource::config('formats')).')';
		}
		return Resource_Routes::$_format_regex;
	}

	/**
	 * The name of the resource. It is used for identifying resources. It is required and must be unique.
	 * @var string
	 */
	protected $_name = NULL;

	/**
	 * The name of the model
	 * @var string
	 */
	protected $_model = NULL;

	/**
	 * The name of the route key - id or slug
	 * @var string
	 */
	protected $_key = NULL;

	/**
	 * Defines if the resource is singular
	 * @var boolean
	 */
	protected $_type = NULL;

	/**
	 * The parent resource name
	 * @var string
	 */
	protected $_parent = NULL;

	/**
	 * The field name used in the parent resource model to select child collection from a has-many relationship.
	 * @var string
	 */
	protected $_field = NULL;

	/**
	 * The route name used in setting routes
	 * @var string
	 */
	protected $_route_name = NULL;

	/**
	 * The path string used in urls when setting routes.
	 * @var string
	 */
	protected $_path_string = NULL;

	/**
	 * The name of the controller for the resource
	 * @var string
	 */
	protected $_controller = NULL;

	/**
	 * The childrend for the resource
	 * @var array
	 */
	protected $_children = NULL;

	/**
	 * The object route object for the resource.
	 * @var Resource_Route
	 */
	protected $_object_route = NULL;

	/**
	 * The collection route object for the resource.
	 * @var Resource_Route
	 */
	protected $_collection_route = NULL;

	/**
	 * Route params for the resource.
	 * Used when selecting collection or an object for the resource.
	 * @var array
	 */
	protected $_params = NULL;

	/**
	 * Options given when setting the resource.
	 * @var array
	 */
	protected $_options = NULL;

	/**
	 * Constructor for the Resource class.
	 * @param string $name    the name of the resource. It is combined with the parent resource name when it's available.
	 * @param array  $options the options for the resource
	 * @param Resource $parent  the parent object for the resource
	 */
	public function __construct($name, array $options = array(), $parent = NULL)
	{
		$this->_name = $name;
		$this->_options = $options;
		$this->_key = $this->option('key', Resource::config('key'));
		$model = $this->option('model', Inflector::singular($name));
		Resource::driver()->model_insist($model);
		$this->_model = $model;
		$this->_type = constant('Resource::'.strtoupper($this->option('type', Resource::config('type'))));
		$this->_path_string = Inflector::singular($name, (int) $this->is_singular());
		$this->_controller = $this->option('controller', $this->_path_string);
		$this->_options['layout_action'] = $this->option('layout_action', $this->option('default_actions.object'));

		if ($parent !== NULL)
		{
			$this->_parent = $parent;
			$this->_name = Inflector::singular($this->_parent->route_name()).'_'.$this->_name;
			$this->_field = $this->option('field', Inflector::plural($this->_model));
		}
		else
		{
			$this->_children = array();
		}

		$this->_route_name = $this->name();
		$this->_params = array();

		$this->_options = Arr::merge($this->_default_options(), $this->_options);
		$this->_options['prefix'] = ((string) $this->option('prefix'));
		$this->_options['prefix'] .= $this->option('path_string');

		$this->_set_routes($parent);
	}

	/**
	 * Get the collection query object for the resource
	 * @return mixed depending on the driver - Jam_Builder or ORM
	 */
	public function collection()
	{
		return Resource::driver()->collection($this);
	}

	/**
	 * Get the model object for the resource.
	 * @return mixed depending on the driver - Jam_Model or ORM
	 */
	public function object()
	{
		return Resource::driver()->object($this);
	}

	/**
	 * Get the model object for the parent resource of the resource.
	 * @return mixed depending on the driver - Jam_Model or ORM
	 */
	public function parent_object()
	{
		return $this
			->parent()
			->param(array('id' => $this->param('parent_id')))
			->object();
	}

	/**
	 * Get or set route params to the resource object to be used when selecting a collection or an object.
	 * It could act as:
	 * 		getter for all of the params - if no arguments are given
	 * 		getter for a single param - if a string is given
	 * 		setter - if an array is given; It merges the previously set params with the new ones.
	 * @param  NULL|string|array $param
	 * @return $this|array|mixed if it acts as a setter return $this; otherwise array of all the params or a single param
	 * @throws Resource_Exception If it acts as a getter of a single param and it's not set
	 * @uses Arr::merge to merge the previously set params with the new ones provided
	 */
	public function param($param = NULL)
	{
		if ($param === NULL)
		{
			return $this->_params;
		}
		elseif (is_array($param))
		{
			$this->_params = Arr::merge($this->_params, $param);
			return $this;
		}
		if ( ! isset($this->_params[$param]))
		{
			throw new Resource_Exception('The :param param is missing from the route :route for the :resource resource!', array(
				':route' => Route::name($this->object_route()),
				':resource' => $this->_name,
				':param' => $param
			));
		}
		return Arr::get($this->_params, $param);
	}

	/**
	 * Get one or all options for the resource.
	 * If a single option is requested you can provide a default value to be returned if the option is not present. It's useful in the Resource constructor.
	 * Supports dot notation.
	 * @param  string $option_name option name
	 * @param  mixed $default     default value
	 * @return mixed
	 * @uses Arr::path for the dot notation support
	 */
	public function option($option_name = NULL, $default = NULL)
	{
		if ($option_name === NULL)
		{
			return $this->_options;
		}
		return Arr::path($this->_options, $option_name, $default);
	}

	/**
	 * Check if the resource should use slugs instead of primary keys.
	 * It uses the provided key option to determine it.
	 * @return boolean
	 */
	public function is_sluggable()
	{
		return $this->key() === 'slug';
	}

	public function is_multiple()
	{
		return $this->type() === Resource::MULTIPLE;
	}

	public function is_singular()
	{
		return $this->type() === Resource::SINGULAR;
	}

	/**
	 * Get an array of the child resource for the resource
	 * @param  string $child_name the name of a single child resource to be returned
	 * @return array array of isntances of the Resource class
	 */
	public function children($child_name = NULL)
	{
		if ($child_name)
		{
			return (bool) Arr::get($this->_children, $child_name);
		}
		return $this->_children;
	}

	/**
	 * Get the resource name
	 * @return string
	 */
	public function name()
	{
		return $this->_name;
	}

	/**
	 * Get the resource model name
	 * @return string
	 */
	public function model()
	{
		return $this->_model;
	}

	/**
	 * Get the resource key
	 * @return string
	 */
	public function key()
	{
		return $this->_key;
	}

	/**
	 * Get the resource type
	 * @return string
	 */
	public function type()
	{
		return $this->_type;
	}

	/**
	 * Get the parent resource
	 * @return Resource
	 */
	public function parent()
	{
		return $this->_parent;
	}

	/**
	 * Get the resource field.
	 * @return string
	 */
	public function field()
	{
		return $this->_field;
	}

	/**
	 * Get the resource path string
	 * @return string
	 */
	public function path_string()
	{
		return $this->_path_string;
	}

	/**
	 * Get the resource route name
	 * @return string
	 */
	public function route_name()
	{
		return $this->_route_name;
	}

	/**
	 * Get the resource controller name
	 * @return string
	 */
	public function controller()
	{
		return $this->_controller;
	}

	/**
	 * Get the resource object route
	 * @return Resource_Route
	 */
	public function object_route()
	{
		return $this->_object_route;
	}

	/**
	 * Get the resource collection route.
	 * @return Resource_Route
	 */
	public function collection_route()
	{
		return $this->_collection_route;
	}

	/**
	 * Return the object and the collection routes of the resource if available
	 * @return array the routes
	 */
	public function routes()
	{
		return array_filter(array(
			$this->object_route(),
			$this->collection_route()
		));
	}

	/**
	 * Return the default options for the resource regarding the config and the given options
	 * @return array
	 */
	protected function _default_options()
	{
		return array(
			'collection_actions'  => $this->option('common_actions.collection', Resource::config('common_actions.collection')),
			'default_actions'     => Resource::config('default_actions'),
			'object_actions'      => $this->option('common_actions.object', Resource::config('common_actions.object')),
			'controller'          => $this->_controller,
			'path_string'         => $this->_path_string,
			'prefix'              => '',
			'children'            => array(),
			'object_route'        => TRUE,
			'collection_route'    => TRUE
		);
	}

	/**
	 * Set the child resource.
	 * It adjust the child resource options, set the resource and add it to the child resources of the parent.
	 * @param string $child_name    the child resource name
	 * @param array $child_options the child resource options
	 */
	protected function _set_child($child_name, $child_options)
	{
		if ( ! empty($child_options['prefix']))
		{
			$child_options['prefix'] .= '/';
		}
		else
		{
			$child_options['prefix'] = '';
		}

		$child_options['prefix'] = $this->option('path_string').'/';

		if ($this->is_multiple())
		{
			$child_options['prefix'] .= '<parent_id>/';
		}

		$child_resource = Resource::set($child_name, $child_options, $this);

		return $this->_children[$child_resource->name()] = $child_resource;
	}

	/**
	 * Set the children resources and the routes for the resource depending on the options and the type provided.
	 * @return $this
	 * @uses Resource_Routes for the routes
	 * @uses $this->_set_child for the child resources
	 */
	protected function _set_routes()
	{
		foreach ($this->option('children') as $child_name => $child_options) 
		{
			$this->_set_child($child_name, $child_options);
		}

		if ($this->option('object_route'))
		{
			$this->_object_route = $this->set_route('object');
		}

		if ($this->option('collection_route'))
		{
			if ($this->_name == 'people')
			{
				die('people are dying here');
			}
			$this->_collection_route = $this->_set_route('collection');
		}

		return $this;
	}

	/**
	 * Set a route from the given type.
	 * @param string $type 'object' or 'collection'
	 * @return Route the created Resource_Route object
	 */
	protected function _set_route($type)
	{
		$uri = $this->is_multiple() ? '/<id>' : '';
		$actions = $this->option($type.'_actions');
		$route_regex = array();
		$route_defaults = array(
			'controller'  => $this->controller(),
			'action'      => $this->option('default_actions.'.$type),
		);

		if (($parent = $this->parent()) AND $parent->is_multiple())
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

		if ($this->is_multiple() AND $type == 'object')
		{
			if ($this->is_sluggable())
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
			$route_regex['format'] = Resource::format_regex();
			$route_defaults['format'] = Resource::config('format');
			$uri .= '(.<format>)';
		}

		return Route::set($type == 'object' ? Inflector::singular($this->route_name()) : $this->route_name(), $this->option('prefix').$uri, $route_regex, $this->name())
			->defaults($route_defaults);
	}
}
