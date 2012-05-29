<?php
/**
 * HTML Attributes
 * @package    OpenBuildings/kohana-cli
 * @author     Ivan Kerin
 * @copyright  (c) 2011 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Command_Options implements ArrayAccess, Iterator, Countable 
{
	private $container = array();

	public function __construct($container) 
	{
		$this->container = (array) $container;
	}

	public function has($name)
	{
		return array_key_exists($name, $this->container);
	}

	static public function factory($options = null)
	{
		return new Command_Options($options);
	}

	public function populate_from_argv()
	{
		// Skip the first option, it is always the file executed
		for ($i = 1; $i < $_SERVER['argc']; $i++)
		{
			if ( ! isset($_SERVER['argv'][$i]))
			{
				// No more args left
				break;
			}

			// Get the option
			$opt = $_SERVER['argv'][$i];

			if (substr($opt, 0, 2) !== '--')
			{
				// This is not an option argument
				continue;
			}

			// Remove the "--" prefix
			$opt = substr($opt, 2);

			if (strpos($opt, '='))
			{
				// Separate the name and value
				list ($opt, $value) = explode('=', $opt, 2);
			}
			else
			{
				$value = NULL;
			}

			$this->offsetSet($opt, $value);
		}
		return $this;
	}

	/**
	 * Return the raw attributes array
	 * @return array
	 */
	public function as_array()
	{
		return $this->container;
	}

	public function offsetSet($offset, $value) 
	{
		if ($offset == "") 
		{
			$this->container[] = $value;
		}
		else 
		{
			$this->container[$offset] = $value;
		}
	}

	public function offsetExists($offset) 
	{
	 return isset($this->container[$offset]);
	}

	public function offsetUnset($offset) 
	{
		unset($this->container[$offset]);
	}

	public function offsetGet($offset) 
	{
		return isset($this->container[$offset]) ? $this->container[$offset] : null;
	}

	public function rewind() 
	{
		reset($this->container);
	}

	public function current() 
	{
		return current($this->container);
	}

	public function key() 
	{
		return key($this->container);
	}

	public function next() 
	{
		return next($this->container);
	}

	public function valid() 
	{
		return $this->current() !== false;
	}    

	public function count() 
	{
	 return count($this->container);
	}

}