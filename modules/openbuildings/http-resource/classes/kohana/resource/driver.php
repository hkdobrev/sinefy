<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Resource_Driver class
 *
 * @package    OpenBuildings/http-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 * @abstract
 */
abstract class Kohana_Resource_Driver {
	
	protected static $_prefix = 'Resource_Driver_';

	/**
	 * Build and return an instance of the resource driver specified in the name
	 * 
	 * Usage: 
	 * 		$driver = Resource_Driver::factory('ORM');
	 * 
	 * @param  string $name the name of the driver
	 * @return Resource_Driver
	 */
	public static function factory($name)
	{
		$class = Resource_Driver::$_prefix.$name;

		if ( ! class_exists($class))
			throw new Kohana_Exception('Resource driver :name with class name :class does not exist', array(':name' => $name, 'class' => $class));

		return new $class;
	}

	/**
	 * Get the collection for a resource
	 * If the resource has a parent resource the method should return the child collection regarding the parent limitation.
	 * @param  Resource $resource The resource for the collection
	 * @return mixed a collection depending on the driver - Jelly_Collection or ORM
	 */
	public function get_collection($resource, $get_children = TRUE)
	{
		if (($parent = $resource->parent()) AND $parent->type() === Resource::MULTIPLE)
		{
			$parent_query = $this->get_collection_query($parent->model());
			if ($parent->is_sluggable())
			{
				$parent_query = $parent_query->find_by_slug_insist($resource->param('parent_id'));
			}
			else
			{
				$parent_query = $parent_query->find_insist($resource->param('parent_id'));
			}
			$collection_query = $parent_query;
			if ($get_children)
			{
				$collection_query = $this->get_children($collection_query, $resource->field());
			}
		}
		else
		{
			$collection_query = $this->get_collection_query($resource->model());
		}
		return $collection_query;
	}

	/**
	 * Get the object for a resource.
	 * If the resource has a parent resource the method should return the child object regarding the parent limitation.
	 * @param  Resource $resource The resource to get the object for
	 * @return mixed an object depending from the driver configuration; could be ORM or Jelly_Object
	 */
	public function get_object($resource)
	{
		$child_query = $this->get_collection($resource);
		if ($resource->is_sluggable())
		{
			return $child_query->find_by_slug_insist($resource->param('id'));
		}
		else
		{
			return $child_query->key($resource->param('id'))->find_insist();
		}
	}

	/**
	 * Get the value of the primary field of the object; slug if it's sluggable; primary_key otherwise
	 * @param  mixed $object Jelly_Model or ORM
	 * @return mixed the slug or the primary_key
	 */
	public function get_primary_field($object)
	{
		if ($this->is_sluggable($object))
		{
			return $object->slug ?: $object->id;
		}
		else
		{
			return $this->get_primary_key($object);
		}
	}

	/**
	 * Set a key in the params and if it has been already set move the old one to the parent key
	 * @param array &$params a referenct to the params array on which to operate on
	 * @param int $key     The key which to be set if provided
	 */
	public function set_key(&$params, $key = NULL)
	{
		if (isset($params['id']))
		{
			$params['parent_id'] = $params['id'];
		}
		if ($key)
		{
			$params['id'] = $key;
		}
		return $this;
	}

	/**
	 * Get the model name for a object
	 * @param mixed $object could be an instance of Jelly_Model, Jelly_Builder, Jelly_Collection or ORM
	 * @return string
	 */
	abstract public function get_model_name($object);

	/**
	 * Parse an object or a collection and returns the name of the model
	 * @param  mixed $object a model object depending on the drivers; it could be Jelly_Collection, Jelly_Builder, Jelly_Object, ORM or Database_Result
	 * @param  array $params if the object is loaded it would set id in params to the key of the object
	 * @return string
	 */
	abstract public function parse_object($object, &$params);

	/**
	 * Return the primary key value for the object provided
	 * @param  mixed $object the model object regarding the configured driver - ORM or Jelly_Model
	 * @return int|mixed the primary key value
	 */
	abstract public function get_primary_key($object);

	/**
	 * Get a collection query for a model
	 * @param  string $model the model name
	 * @return mixed Jelly_Builder for Jelly driver and ORM for ORM driver
	 */
	abstract public function get_collection_query($model);

	/**
	 * Get a query for a child field of a model
	 * @param  mixed $query       the parent query - Jelly_Builder or ORM
	 * @param  string $child_field the name of the child field
	 * @return mixed Jelly_Builder or ORM
	 */
	abstract public function get_children($query, $child_field);

	/**
	 * Checks if a model object is using the sluggable behavior
	 * @param  mixed  $object Jelly_Model or ORM
	 * @return boolean TRUE if the object implements the sluggable behavior; FALSE otherwise
	 */
	abstract public function is_sluggable($object);
}