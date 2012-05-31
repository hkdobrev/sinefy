<?php defined('SYSPATH') or die('No direct script access.');

/**
 * PHPUnit testsuite for kohana application
 *
 * @package    Kohana/UnitTest
 * @author     Kohana Team
 * @author     Woody Gilk <woody.gilk@kohanaframework.org>
 * @author     BRMatt <matthew@sigswitch.com>
 * @author	   Paul Banks
 * @copyright  (c) 2008-2009 Kohana Team
 * @license    http://kohanaphp.com/license
 */
class Kohana_Unittest_Tests {
	static protected $cache = array();

	/**
	 * Flag to identify whether the installed version of phpunit
	 * is greater than or equal to 3.5
	 * @var boolean
	 */
	static protected $phpunit_v35 = FALSE;

	/**
	 * CodeCoverage_Filter instance.
	 * @var  PHP_CodeCoverage_Filter
	 */
	static protected $filter;

	static protected $files;

	/**
	 * Loads test files if they cannot be found by kohana
	 * @param <type> $class
	 */
	static function autoload($class)
	{
		$file = strtolower(str_replace('_', '/', $class));

		if ($file = Kohana::find_file('tests/classes', $file))
		{
			require_once $file;
		}
	}

	/**
	 * Configures the environment for testing
	 *
	 * Does the following:
	 *
	 * * Loads the phpunit framework (for the web ui)
	 * * Restores exception phpunit error handlers (for cli)
	 * * registeres an autoloader to load test files
	 */
	static public function configure_environment($do_whitelist = TRUE, $do_blacklist = TRUE)
	{
		restore_exception_handler();
		restore_error_handler();

		spl_autoload_register(array('Unittest_tests', 'autoload'));

		// As of PHPUnit v3.5 there are slight differences in the way files are black|whitelisted
		self::$phpunit_v35 = function_exists('phpunit_autoload');

		if (self::$phpunit_v35)
		{
			if (method_exists('PHP_CodeCoverage_Filter', 'getInstance'))
			{
				self::$filter = PHP_CodeCoverage_Filter::getInstance();
			}
			else
			{
				self::$filter = new PHP_CodeCoverage_Filter;
			}
		}

		Unittest_tests::$cache = (($cache = Kohana::cache('unittest_whitelist_cache')) === NULL) ? array() : $cache;

		$config = Kohana::$config->load('unittest');

		if ($do_whitelist AND $config->use_whitelist)
		{
			self::whitelist();
		}

		if ($do_blacklist AND count($config['blacklist']))
		{
			Unittest_tests::blacklist($config->blacklist);
		}
	}

	/**
	 * Creates the test suite for kohana
	 *
	 * @return PHPUnit_Framework_TestSuite
	 */
	static function suite()
	{
		static $suite;

		if ($suite instanceof PHPUnit_Framework_TestSuite)
		{
			return $suite;
		}

		// Unittest_Tests::configure_environment();

		if ( ! self::$files)
		{
			self::$files = Kohana::list_files('tests', self::get_config_whitelist());
		}

		$suite = new PHPUnit_Framework_TestSuite;

		self::addTests($suite, self::$files);

		return $suite;
	}

	/**
	 * Add files to test suite $suite
	 *
	 * Uses recursion to scan subdirectories
	 *
	 * @param PHPUnit_Framework_TestSuite  $suite   The test suite to add to
	 * @param array                        $files   Array of files to test
	 */
	static function addTests(PHPUnit_Framework_TestSuite $suite, array $files)
	{
		foreach ($files as $path => $file)
		{
			if (is_array($file))
			{
				if ($path != 'tests/test_data')
				{
					self::addTests($suite, $file);
				}
			}
			else
			{
				// Make sure we only include php files
				if (is_file($file) AND substr($file, -strlen(EXT)) === EXT)
				{
					// The default PHPUnit TestCase extension
					if (strpos($file, 'Test'.EXT))
					{
						$suite->addTestFile($file);
					}
					else
					{
						// require_once($file);
					}

					if (isset(self::$filter))
					{
						self::$filter->addFileToBlacklist($file);
					}
					else
					{
						PHPUnit_Util_Filter::addFileToFilter($file);
					}
				}
			}
		}
		
	}

	/**
	 * Blacklist a set of files in PHPUnit code coverage
	 *
	 * @param array A set of files to blacklist
	 */
	static public function blacklist(array $blacklist_items)
	{
		if (isset(self::$filter))
		{
			foreach ($blacklist_items as $item)
			{
				if (is_dir($item))
				{
					self::$filter->addDirectoryToBlacklist($item);
				}
				else
				{
					self::$filter->addFileToBlacklist($item);
				}
			}
		}
		else
		{
			foreach ($blacklist_items as $item)
			{
				if (is_dir($item))
				{
					PHPUnit_Util_Filter::addDirectoryToFilter($item);
				}
				else
				{
					PHPUnit_Util_Filter::addFileToFilter($item);
				}
			}
		}
	}

	/**
	 * Sets the whitelist
	 *
	 * If no directories are provided then the function'll load the whitelist
	 * set in the config file
	 *
	 * @param array $directories Optional directories to whitelist
	 */
	static public function whitelist(array $directories = NULL)
	{
		if (empty($directories))
		{
			$directories = self::get_config_whitelist();
		}

		if (count($directories))
		{
			foreach ($directories as & $directory)
			{
				$directory = realpath($directory).'/';
			}

			// Only whitelist the "top" files in the cascading filesystem
			self::set_whitelist(Kohana::list_files('classes', $directories));
		}
	}

	/**
	 * Works out the whitelist from the config
	 * Used only on the CLI
	 *
	 * @returns array Array of directories to whitelist
	 */
	static protected function get_config_whitelist()
	{
		$config = Kohana::$config->load('unittest');
		$directories = array();

		if ($config->whitelist['app'])
		{
			$directories['k_app'] = APPPATH;
		}

		if ($modules = $config->whitelist['modules'])
		{
			$k_modules = Kohana::modules();

			// Have to do this because kohana merges config...
			// If you want to include all modules & override defaults then TRUE must be the first
			// value in the modules array of your app/config/unittest file
			if (array_search(TRUE, $modules, TRUE) === (count($modules) - 1))
			{
				$modules = $k_modules;
			}
			elseif (array_search(FALSE, $modules, TRUE) === FALSE)
			{
				$modules = array_intersect_key($k_modules, array_combine($modules, $modules));
			}
			else
			{
				// modules are disabled
				$modules = array();
			}

			$directories += $modules;
		}

		if ($config->whitelist['system'])
		{
			$directories['k_sys'] = SYSPATH;
		}

		return $directories;
	}

	/**
	 * Recursively whitelists an array of files
	 *
	 * @param array $files Array of files to whitelist
	 */
	static protected function set_whitelist($files)
	{
		foreach ($files as $file)
		{
			if (is_array($file))
			{
				self::set_whitelist($file);
			}
			else
			{
				if ( ! isset(Unittest_tests::$cache[$file]))
				{
					$relative_path = substr($file, strrpos($file, 'classes'.DIRECTORY_SEPARATOR) + 8, -strlen(EXT));
					$cascading_file = Kohana::find_file('classes', $relative_path);

					// The theory is that if this file is the highest one in the cascading filesystem
					// then it's safe to whitelist
					Unittest_tests::$cache[$file] =  ($cascading_file === $file);
				}

				if (Unittest_tests::$cache[$file])
				{
					if (isset(self::$filter))
					{
						self::$filter->addFileToWhitelist($file);
					}
					else
					{
						PHPUnit_Util_Filter::addFileToWhitelist($file);
					}
				}
			}
		}
	}
}