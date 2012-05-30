<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('America/Chicago');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}
else
{
	Kohana::$environment = Kohana::$is_cli ? Kohana::DEVELOPMENT : Kohana::PRODUCTION;
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
	'index_file' => FALSE,
	'cache' => TRUE
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(

	/**
	 * Kohana core modules.
	 * Some of them are left just for reference.
	 */
	
	// 'auth'       => MODPATH.'core/auth',       // Basic authentication
	'cache'      => MODPATH.'core/cache',         // Caching with multiple backends
	// 'codebench'  => MODPATH.'core/codebench',  // Benchmarking tool
	'database'   => MODPATH.'core/database',      // Database access
	'image'      => MODPATH.'core/image',         // Image manipulation
	// 'orm'        => MODPATH.'core/orm',        // Object Relationship Mapping
	'pagination' => MODPATH.'core/pagination',    // Pagination math, routes, limit, offset and views
	/**
	 * Modules from OpenBuildings
	 */

	'jelly'                   => MODPATH.'openbuildings/jelly',                  // Jelly/Jerry/Jam ORM - next generation ORM from Ivan Kerin (bow)
	'jelly-auth'              => MODPATH.'openbuildings/jelly-auth',             // Authentication for Jelly. Support services like Facebook and Twitter
	'http-resource'           => MODPATH.'openbuildings/http-resource',          // Resources act as a bridge between models and routes
	'services-manger'         => MODPATH.'openbuildings/services-manger',        // Manage services like Google Analytics, Beanstalkd, Facebook
	'timestamped-migrations'  => MODPATH.'opebuildings/timestamped-migrations',  // Rails-like migrations
	'kohana-cli'              => MODPATH.'opebuildings/kohana-cli',              // User guide and API documentation
	'asset-merger'            => MODPATH.'opebuildings/asset-merger',            // Merging assets and stuff

	/**
	 * Other extension modules
	 */
	
	/**
	 * Generic modules written by us
	 */
	// 'foursquare' => MODPATH.'extensions/foursquare',

	/**
	 * Sinefy specific modules
	 */
	
	// 'admin' => MODPATH.'sinefy/admin',
	// 'api' => MODPATH.'sinefy/api',

));


switch (Kohana::$environment) {
	case Kohana::DEVELOPMENT:
		include APPPATH.'bootstrap.development.php';
	break;
	case Kohana::TESTING:
		include APPPATH.'bootstrap.testing.php';
	break;
	case Kohana::STAGING:
		include APPPATH.'bootstrap.staging.php';
	break;
	case Kohana::PRODUCTION:
		include APPPATH.'bootstrap.production.php';
	break;
}


/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

/**
 * Shortcuts for login/logout/signup
 */
Route::set('login', 'login')
	->defaults(array(
		'controller' => 'session',
		'action' => 'new'
	));

Route::set('logout', 'logout')
	->defaults(array(
		'controller' => 'session',
		'action' => 'delete'
	));

Route::set('home', '(<page>)', array(
	'page' => '[1-9][0-9]*'
))
	->defaults(array(
		'controller' => 'home',
		'action' => 'index',
		'page'		 =>	'1'
	));

Route::set('watched', 'movie/watched')
	->defaults(array(
		'controller' => 'movie',
		'action' => 'watched'
	));

Route::set('to_watch', 'movie/to_watch')
	->defaults(array(
		'controller' => 'movie',
		'action' => 'to_watch'
	));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index'
	));
