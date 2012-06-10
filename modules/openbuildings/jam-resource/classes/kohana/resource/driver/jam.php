<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Resource_Driver_Jam class
 *
 * @package    OpenBuildings/jam-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource_Driver_Jam extends Resource_Driver {

	public function check_model($model_name)
	{
		return (bool) Jam::meta($model_name);
	}

	public function model_name($object)
	{
		return $object->meta()->model();
	}

	public function collection_query($model)
	{
		return Jam::query($model);
	}

	public function children($query, $child_field)
	{
		return $query->builder($child_field);
	}

	public function primary_key($object)
	{
		return $object->id();
	}

	public function parse_object($object, &$params)
	{
		if ($object instanceof Jam_Model AND $object->loaded())
		{
			$this->set_key($params, $this->primary_field($object));
		}
		return $this->model_name($object);
	}

	public function is_sluggable($object)
	{
		return array_key_exists('sluggable', $object->meta()->behaviors());
	}
}
