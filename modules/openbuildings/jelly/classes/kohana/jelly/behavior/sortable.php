<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 *  Clipping behavior for Jelly ORM library 
 *  
 *  @copyright 2011 Despark Ltd.
 *  @version 1.0
 *  @author Ivan Kerin
 */

class Kohana_Jelly_Behavior_Sortable extends Jelly_Behavior 
{ 
	public $_field = 'sort_position';

	public function initialize(Jelly_Event $event, $model, $name) 
	{
		parent::initialize($event, $model, $name);

		Jelly::meta($model)->field($this->_field, Jelly::field('integer', array('default' => 0)));	
	}

	public function builder_before_select(Jelly_Builder $builder)
	{
		$builder->order_by_position();
	}

	public function builder_call_order_by_position(Jelly_Builder $builder)
	{
		$builder->order_by($this->_field, "ASC");
	}

	public function model_before_create(Jelly_Model $model)
	{
		if ( ! $model->{$this->_field})
		{
			$model->{$this->_field} = Jelly::query($this->_model)->count();
		}
	}

	public function compare(Jelly_Model $item1, Jelly_Model $item2)
	{
		return $item1->{$this->_field} - $item2->{$this->_field};
	}
} // End Jelly_Behavior_Sluggable