<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Resource_Collection class
 *
 * @package    OpenBuildings/http-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource_Collection {
	
	protected static $_driver = NULL;

	/**
	 * Create and return a new Resource Collection
	 * @param  Resource|string $resource The resource to generate the collection from or its name
	 * @return Resource_Collection
	 */
	public static function factory($resource)
	{
		if ( ! $resource instanceof Resource)
		{
			$resource = Resource::get($resource);
		}
		return new Resource_Collection($resource);
	}

	protected $_collection = NULL;

	/**
	 * The resource for the collection
	 * @var Resource
	 */
	protected $_resource = NULL;

	/**
	 * 
	 * @param Resource $resource The resource for the Resource Collection
	 */
	public function __construct($resource)
	{
		$this->_resource = $resource;
	}

	public function get_collection()
	{
		if (empty($this->_collection))
		{
			$this->_collection = Resource::driver()->get_collection($this->_resource);
		}
		return $this->_collection;
	}

	public function get_object()
	{
		if (empty($this->_object))
		{
			$this->_object = Resource::driver()->get_object($this->_resource);
		}
		return $this->_object;

	}

}