<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 *  Nested behavior for Jelly ORM library
 *  Creates a nested set for this model, where an object can have a parent object of the same model. Requires parent_id field in the database. Reference @ref behaviors  
 * 
 *  @copyright 2011 Despark Ltd.
 *  @version 1.0
 *  @author Ivan Kerin
 */
class Kohana_Jelly_Behavior_Nested extends Jelly_Behavior
{
	protected $_field = 'parent_id';
	
	public function initialize(Jelly_Event $event, $model, $name) 
	{
		parent::initialize($event, $model, $name);

		Jelly::meta($model)->associations(array(
			'parent' => Jelly::association('belongsto', array(
				'foreign' => $model,
				'column' => $this->_field,
				'default' => 0,
				'inverse_of' => 'children'
			)),
			'children' => Jelly::association('hasmany', array(
				'foreign' => $model.'.'.$this->_field,
				'inverse_of' => 'parent'
			)),
		));
	}
	
	public function builder_call_root(Jelly_Builder $builder, Jelly_Event_Data $data)
	{														
		$data->return = $builder->where_open()->where($this->_field, '=', 0)->or_where($this->_field, 'IS', NULL)->where_close();
		$data->stop = TRUE;
	}
	
	public function model_call_root(Jelly_Model $model, Jelly_Event_Data $data)
	{
		for ($item = $model; $item->parent->loaded(); $item = $item->parent);
		$data->stop = TRUE;
		$data->return = $item;
	}

	public function model_call_is_root(Jelly_Model $model, Jelly_Event_Data $data)
	{
		$data->stop = TRUE;
		$data->return = ! (bool) $model->{$this->_field};
	}
	
	public function model_call_parents(Jelly_Model $model, Jelly_Event_Data $data)
	{	
		$parents = array();	
		for ($item = $model; $item->parent->loaded(); $parents[] = $item = $item->parent);
		
		$data->return = $parents;
		$data->stop = TRUE;
	}																		
}