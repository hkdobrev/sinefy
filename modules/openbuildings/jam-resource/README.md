Resource module for Kohana 3.2
==============================

Resources act as a bridge between routes, models and requests.

Main Features
-------------

 * Define resources in your bootstrap and routes for them would automatically be created
 * Generate urls from model objects or collections
 * Nest resources
 * Access the model object, the model collection or the parent object for the current route
 * Easily use slugs for your resources

Usage:
------

**Defining resources**

``` php
<?php 
// Define the users resource
// This will generate a collection route for listing users and an object route for a single user
// Example collection url: /users
// Example object url: /users/some-user-123
Resource::set('users', array(

	// The object route will use slugs instead of ids
	'key' => 'slug',

	// Child resources
	'children' => array(

		// Define the user_images resource
		// This will generate only collection route for listing images
		// It will have url like: /users/some-user-123/images
		'images' => array(

			// This will skip the object route
			'object_route' => FALSE,

			// The field which will be used to access the child model from the parent model
			'field' => 'images_created'
		)
	)
));

// Define the images resource
Resource::set('images');

// Define the folders resource
Resource::set('folders', array(
	'key' => 'slug',

	'children' => array(

		// Define the folder_documents resource
		'documents' => array(

			// You can set the model explicitly
			'model' => 'folder_document',
			'field' => 'documents',

			// Explicitly set the string in the url
			'path_string' => 'docs'
		)
	)
));

// Define the documents resource
Resource::set('documents', array(
	'key' => 'slug',

	// This will skip the collection route
	'collection_route' => FALSE,
	'model' => 'folder_document'
));
?>
```

**Generate urls from objects**

You are probably used to Route::url where you specify the name of the route and route params to generate a url. This is much easier with resources. You can use Resource::url with objects, strings and more to generate a correct url.

In most cases you will have loaded objects or collection queries which you would want to generate urls to. Here is how:

``` php
<?php
// Generate an object url
Resource::url($image); // /images/5

// Generate a slug url
Resource::url($user); // /users/some-user-123

// Generate url for child resource
Resource::url($user, 'images'); // /users/some-user-123/images

// If you have $images collection
Resource::url($user, $images); // /users/some-user-123/images

// Specify a route param
Resource::url('images', array('action' => 'new'));

// Object url for child resource
Resource::url($folder, $document); // /folders/some-folder-1234/docs/my-document-5
?>
```

**Get current objects and collections**

In the controllers corresponding to a resource you can easily get the model object, model collection or the parent model object.

``` php
<?php
// Get the resource corresponding to the route from the current request
Resource::current();

// Or
Request::current()->resource();

// Or if you are in a controller
$this->request->resource();

// Get the collection query for the current request
$this->request->resource()->collection();

// Load and get the object for the current request
$this->request->resource()->object();

// Load and get the parent object for the current request
$this->request->resource()->parent_object();
?>
```

Singular resources
------------------

**TODO: explain what singular resources are and how they should be used**

Drivers
-------

Since the module works with model objects it introduces drivers for the two most used ORM modules for Kohana.

 * [ORM](https://github.com/kohana/orm)
 * [Jam](https://github.com/creatoro/jam)

Each driver implements slugs and basic methods for querying objects and collections.

**TODO: explain sluggable implementation here**

**TODO: explain what is needed to add a driver**

Formats
-------

**TODO: explain formats here**

Options
-------

Here is a complete list of the available options when specifying resources:

**Name**

The first parameter passed to Resource::set is the name of the resource. It is the most important configuration, because it is used for the path_string, route_name, model, controller and other options if they are not provided.

Always specify the name in plural form, except when you are defining a singular resource.

**General options**

 * **key** - `id` or `slug` - define if the resource uses slugs or not. More options could be defined in the future. Default: read from the config
 * **model** - the name of the model for the resource; default: the singular form of the resource name
 * **controller** - the name of the controller for the routes; default: the plural form of the resource name
 * **type** - 'multiple' or 'singular'. Define the type of the resource. Default: multiple
 * **path_string** - the string used in urls instead of the name; default - the name of the resource
 * **default_actions** - default actions for the route if no action is specified; default: read from the config file
 * **common_actions** - common actions which every resource has for its routes; You should define this in the config file and you could override them for specific resources where needed.
 * **collection_actions** - additional actions for the collection route; default: empty array
 * **object_actions** - additional actions for the object route; default: empty array
 * **prefix** - url prefix used before the path_string; default: empty string
 * **object_route** - `TRUE` or `FALSE`. Specify whether you want object route defined or not. Default: `TRUE`
 * **collection_route** - `TRUE` or `FALSE`. Specify whether you want collection route defined or not. Default: `TRUE`
 * **children** - array of child resources with their names and options. Only one level of nesting is allowed!

**Children options**

These options make sense only when used in child resources options.

 * **field** - the field name defined in the parent resource model to get collections from a has many relationship

Configuration
-------------

Global configuration options available in the config file:

 * **key** - `id` or `slug` - define if the resource uses slugs or not. More options could be defined in the future. Default: `id`
 * **driver** - the name of the driver to be used. Available drivers: orm, jam
 * **default_type** - default type for resources: `singular` or `multiple`. Default: `multiple`
 * **format** - the default format to be used. Use FALSE if you don't want formats added to routes. Default: html
 * **formats** - array of available formats. Default: `array('html', 'json', 'jsnop', 'xml', 'js', 'rss')`
 * **common_actions** - common actions which every resource has for its routes

Default:

``` php
<?php 
array(
	'object' => array(
		'edit',
		'delete'
	),
	'collection' => array(
		'new'
	)
)
?>
```

 * **default_actions** - the default actions for the routes.

Default:

``` php
<?php
array(
	'object' => 'show',
	'collection' => 'index'
)
?>
```

 * **positive_integer_regex** - the regex used for ids. Default: `[1-9][0-9]*`
 * **slug_regex** - the regex used for slugs. Default: `(?:[a-z][a-z-0-9]*?-)?[1-9][0-9]*`

Public API
----------

Here is a complete list of the public methods and properties of the resource class and the related classes:

### Resource class ###

This is the main class for the module and you will need only its public API in most cases while using the module.

#### Constants ####

 * **MULTIPLE** - equals to 'multiple'; used for resource types
 * **SINGULAR** - equals to 'singular'; used for resource types

#### Properties ####

 * **$cache** - boolean indicating whether the resources are cached or not

#### Static methods ####

 * **config($path = NULL)** - get resource configuration option using dot notation
 * **get($resource_name)** - get a single resource by name; throws a Resource_Notfound_Exception if not found
 * **all()** - get all defined resources in an array; the keys are the names of the resources
 * **url(...)** - generate an url for the resource
 * **current()** - get the resource for the route of the current request
 * **set($name, array $options = array(), $parent = NULL)** - create new resource with the given options
 * **cache($save = FALSE)** - cache the resources
 * **driver()** - get and cache an instance of the Resource_Driver class depending on the driver specified in the config

#### Non-static methods ####

 * **__construct($name, array $options = array(), $parent = NULL)** - constructor for the Resource class
 * **collection()** - get the collection query corresponding to the resource
 * **object()** - get the model object for the resource; throws a driver-specific exception if not loaded
 * **parent_object()** - get the model object for the parent resource for the current request
 * **get_collection()** - get and cache an instance of the Resource_Collection class
 * **clear_collection()** - clear the cached instance of the Resource_Collection class
 * **param($param = NULL)** - get or set route params into the resource
 * **option($option_name = NULL, $default = NULL)** - get one or all options for the resource
 * **is_sluggable()** - check if the resource is set to use slugs instead of ids
 * **children($child_name = NULL)** - get an array of the child resources of the resource
 * **name()** - get the name of the resource
 * **model()** - get the model name of the resource
 * **key()** - get the key of the resource
 * **type()** - get the type of the resource
 * **parent()** - get the parent resource of the resource
 * **field()** - get the field of the resource
 * **path_string()** - get path_string of the resource
 * **route_name()** - get the route_name option of the resource
 * **controller()** - get the name of the controller for the resource
 * **object_route()** - get the object route object for the resource
 * **collection_route()** - get the collection object route object for the resource

### Resource_Driver class ###

It takes care of all of the work regarding model objects and collections.

#### Static methods ####

 * **factory($name)** - get an object of the Resource_Driver class depending on the name of the driver specified

#### Non-static methods ####

 * **get_collection($resource, $get_children = FALSE)** - get the collection for a resource
 * **get_object($resource)** - get the object for a resource
 * **get_primary_field($object)** - get the slug or the primary key of an object
 * **set_key(&$params, $key = NULL)** - set key to the params of the resource; used in parse_object

#### Abstract methods (defined in the orm-specific drivers) ####

 * **parse_object($object, &$params)** - return the name of the model and uses Resource_Driver::set_key() to adjust the resource route params
 * **get_primary_key($object)** - return the primary key of the object provided
 * **get_model_name($object)** - return the model name of the object or collection provided. **WARNING: The method does not work with collections when ORM driver is used. Collections in the ORM are instances of Database_Result.**
 * **get_collection_query($model)** - return a collection query object for the provided model name
 * **get_children($query, $child_field)** - get child collection query object
 * **is_sluggable($object)** - checks if an object used slugs

### Resource_Routes class ###

It takes care of defining object and collection routes for the resources. It also attach the resource to the route object using the Resource_Route class.

#### Static methods ####

 * **factory($resource)** - build and return an instance of the Resource_Routes class for the given resource
 * **format_regex()** - get and cache the regex for formats used in routes depending on the configuration file

#### Non-static methods ####

 * **__construct($resource)** - constructor for the Resource_Routes class
 * **set_object_route()** - set the object_route for the resource associated with the Resource_Routes object
 * **set_collection_route()** - set the collection_route for the resource associated with the Resource_Routes object

### Resource_Route class ###

The Resource_Route class extends Kohana_Route and the Route class extends the Resource_Route. It allows the resource module to attach resources to corresponding routes.

#### Static methods ####

 * **set($name, $uri_callback = NULL, $regex = NULL, $resource = NULL)** - set the route with a resource attached

#### Non-static methods ####

 * **__contstruct($uri = NULL, $regex = NULL, $resource = NULL)** - constructor for the Resource_Route class
 * **resource()** - get the resource associated with the route

### Resource_Collection class ###

The Resource_Collectio class is used for getting collections and objects for the resource from the drivers.

#### Static methods ####

 * **factory($resource)** - get and build an instance of the Resource_Collection class for the given resource

#### Non-static methods ####

 * **__construct($resource)** - constructor for the Resource_Collection class
 * **get_collection()** - get a collection query object for the resource
 * **get_object()** - get a model object for the resource