<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Resource_ORM class
 *
 * @package    OpenBuildings/http-resource
 * @author     Haralan Dobrev
 * @copyright  (c) 2012 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Resource_ORM extends Kohana_ORM {

	public $slug_pattern = "/^([a-z][a-z0-9-]*?-)?([1-9][0-9]*)$/";

	public $slug_fields = array();

	public function find($key = NULL)
	{
		if ( ! $key)
		{
			return parent::find();
		}
		return $this->where($this->object_name().'.'.$this->primary_key(), '=', $key);
	}

	public function loaded_insist()
	{
		if ( ! $this->loaded())
			throw new ORM_Exception_Notfound(':model not found!', $this);
		return $this;
	}

	public function find_insist($key)
	{
		return $this->find($key)->loaded_insist();
	}

	public function filters()
	{
		$slug_filters = array();
		$slug_filter = array(array($this, '_slug'), array(':model'));
		foreach ($this->slug_fields as $field_name) 
		{
			$slug_filters[$field_name] = $slug_filter;
		}
		return parent::filters() + $slug_filters;
	}

	/**
	 * Generates the slug for a model object
	 * @return string the generated slug
	 * @uses UTF8::transliterate_to_ascii to transliterate non-ASCII characters
	 * @uses URL::title to strip obsolete characters and build the slug
	 */
	protected function _slug()
	{
		$source = array();			
					
		foreach ($this->slug_filters as $field)
		{
			$source[] = $this->$field; 
		}

		$source_string = UTF8::transliterate_to_ascii(join('-', array_filter($source)), -1);

		if (empty($source_string))
		{
			return $this->id();
		}

		return URL::title($source_string).'-'.$this->id();
	}

	/**
	 * Find by slug.
	 * @param  string $slug the slug to search for
	 * @return ORM
	 */
	public function find_by_slug($slug)
	{
		return $this->_find_by_slug($slug);
	}

	/**
	 * Must find by slug.
	 * @param  string $slug the slug to search for
	 * @return ORM
	 * @uses $this->find_insist()
	 */
	public function find_by_slug_insist($slug)
	{
		return $this->_find_by_slug($slug, TRUE);
	}

	/**
	 * Find by slug protected method.
	 * @param  string  $slug   the slug to search for
	 * @param  boolean $strict whether to use find_insist or not
	 * @return ORM
	 * @throws ORM_Exception_Sluggable If an object is find by id, but the slugs doesn't match.
	 * @throws Kohana_Exception If the slug doesn't match the slug pattern.
	 */
	protected function _find_by_slug($slug, $strict = FALSE)
	{
		if (preg_match($this->slug_pattern, $slug, $matches))
		{
			$this->where($this->object_name().'.'.$this->primary_key(), '=', $matches[2]);

			$result = $strict ? $this->find_insist() : $this->find();

			if ($result->loaded() AND $strict AND $result->slug != $slug)
			{
				throw new ORM_Exception_Sluggable("Invalid Slug", $result, $slug);
			}
			return $result;
		}
		else
		{
			throw new Kohana_Exception("Invalid Slug");
		}
	}
}