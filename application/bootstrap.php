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
	
	'auth'       => MODPATH.'core/auth',          // Basic authentication
	'cache'      => MODPATH.'core/cache',         // Caching with multiple backends
	// 'codebench'  => MODPATH.'core/codebench',    // Benchmarking tool
	'database'   => MODPATH.'core/database',      // Database access
	'image'      => MODPATH.'core/image',         // Image manipulation
	// 'orm'        => MODPATH.'core/orm',          // Object Relationship Mapping
	'pagination' => MODPATH.'core/pagination',    // Pagination math, routes, limit, offset and views
	// 'unittest' => MODPATH.'unittest',          // Unit testing
	
	/**
	 * Modules from OpenBuildings
	 */

	'jam'                     => MODPATH.'openbuildings/jam',                        // Jam ORM - next generation ORM from Ivan Kerin (bow)
	'jam-auth'                => MODPATH.'openbuildings/jam-auth',                   // Authentication for Jam. Support services like Facebook and Twitter
	'jam-taxonomy'            => MODPATH.'openbuildings/jam-taxonomy',               // Taxonomy terms and vocabularies for Jam
	'services-manger'         => MODPATH.'openbuildings/services-manager',           // Manage services like Google Analytics, Beanstalkd, Facebook
	'asset-merger'            => MODPATH.'openbuildings/asset-merger',               // Merging assets and stuff

	// Used for tests
	// 'jamaker'                 => MODPATH.'openbuildings/jamaker'                    // Nifty tool for building and creating Jam objects

	// Used through the command line
	// 'timestamped-migrations'  => MODPATH.'openbuildings/timestamped-migrations',    // Rails-like migrations
	// 'kohana-cli'              => MODPATH.'openbuildings/kohana-cli',                // User guide and API documentation

	/**
	 * Other extension modules
	 */
	
	/**
	 * Modules written by us
	 */
	'jam-resource' => MODPATH.'extensions/jam-resource',    // Resources act as a bridge between models and routes
	// 'foursquare'   => MODPATH.'extensions/foursquare',   // Foursquare module for oAuth and REST request

	/**
	 * Sinefy specific modules
	 */
	
	// 'sinefy' => MODPATH.'sinefy/sinefy',
	// 'admin'  => MODPATH.'sinefy/admin',
	// 'api'    => MODPATH.'sinefy/api',

));

if (Kohana::$is_cli)
{
	// Modules loaded only when in CLI mode
	Kohana::modules(Kohana::modules() + array(
		'timestamped-migrations' => MODPATH.'openbuildings/timestamped-migrations',
		'kohana-cli'             => MODPATH.'openbuildings/kohana-cli',
	));
}
elseif (strpos($_SERVER['REQUEST_URI'], '/admin') === 0)
{
	Kohana::modules(Kohana::modules() + array(
		'admin' => MODPATH.'sinefy/admin',
	));
}
else
{
	Kohana::modules(Kohana::modules() + array(
		'sinefy' => MODPATH.'sinefy/sinefy',
	));
}

Cookie::$salt = 'r9DMXL5b12bRy3T';
Session::$default = 'native';
HTML::$windowed_urls = TRUE;


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

include 'routes.php';
