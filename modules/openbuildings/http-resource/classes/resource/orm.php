<?php defined('SYSPATH') OR die('No direct script access.');

class Resource_ORM extends Kohana_Resource_ORM {

	const SLUG_FIELD = 'slug';

	public $is_sluggable = FALSE;

	public $slug_fields = array('name');

	public $pattern = "/^([A-Za-z0-9-]*-)([0-9]+)$/";

	public function filters()
	{
		$filters = parent::filters();
		if ($this->is_sluggable)
		{
			foreach ($this->slug_fields as $field) 
			{
				$filters += array(
					$field => array(
						array(array($this, 'update_slug'), ':model')
					)
				);
			}
		}
		return $filters;
	}

	public function update_slug($model)
	{
		$this->{ORM::SLUG_FIELD} = $this->_slug($model);
	}

	protected function _slug($model)
	{
		$source = array();			
					
		foreach ($model->slug_fields as $field)
		{
			$source[] = $model->$field; 
		}

		$source[] = $model->pk();

		return implode('-', array_filter($source));
	}

	public function loaded_insist()
	{
		if ( ! $this->loaded())
			throw new ORM_Exception_Notfound(":model Not Found", $this);
		return $this;
	}

	public function find_insist()
	{
		return $this->find()->loaded_insist();
	}

	public function find_by_slug($slug)
	{
		if (preg_match($this->slug_pattern, $slug, $matches))
		{
			$this->where($this->primary_key(), '=', $matches[2])->find();

			if ($this->loaded() AND $this->{ORM::SLUG_FIELD} != $slug)
			{
				throw new ORM_Exception_Sluggable("Invalid Slug", $this, $slug);
			}
			return $result;
		}
		else
		{
			throw new Kohana_Exception("Invalid Slug");
		}
		return $this;
	}

	public function find_by_slug_insist($slug)
	{
		return $this->find_by_slug($slug)->loaded_insist();
	}
}