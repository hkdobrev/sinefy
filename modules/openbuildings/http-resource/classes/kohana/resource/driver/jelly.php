<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Resource_Driver_Jelly class
 *
 * @package    OpenBuildings/http-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource_Driver_Jelly extends Resource_Driver {

	public function get_model_name($object)
	{
		return $object->meta()->model();
	}

	public function get_collection_query($model)
	{
		return Jelly::query($model);
	}

	public function get_children($query, $child_field)
	{
		return $query->builder($child_field);
	}

	public function get_primary_key($object)
	{
		return $object->id();
	}

	public function parse_object($object, &$params)
	{
		if ($object instanceof Jelly_Model AND $object->loaded())
		{
			$this->set_key($params, $this->get_primary_field($object));
		}
		return $this->get_model_name($object);
	}

	public function is_sluggable($object)
	{
		return array_key_exists('sluggable', $object->meta()->behaviors());
	}
}