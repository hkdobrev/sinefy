<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Resource_Driver_ORM class
 *
 * @package    OpenBuildings/http-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource_Driver_ORM extends Resource_Driver {

	/**
	 * Get the model name for a object
	 * 
	 * <b>WARNING: This will not work for Database_Result instances</b>
	 * 
	 * @param ORM $object The ORM object to get the name of.
	 * @return string
	 */
	public function get_model_name($object)
	{
		return $object->object_name();
	}

	public function get_collection_query($model)
	{
		return ORM::factory($model);
	}

	public function get_children($query, $child_field)
	{
		return $query->{$child_field};
	}

	public function get_primary_key($object)
	{
		return $object->pk();
	}

	public function parse_object($object, &$key)
	{
		if ($object instanceof ORM AND $object->loaded())
		{
			$key = $this->get_primary_key($object);
			$this->set_key($params, $key);
		}
		return $this->get_model_name($object);
	}

	public function is_sluggable($object)
	{
		return isset($object->is_sluggable) AND $object->is_sluggable;
	}
}