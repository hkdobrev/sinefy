<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 *  Uploadable behavior for Jelly ORM library
 *  
 *  @copyright 2011 Despark Ltd.
 *  @version 1.0
 *  @author Radil Radenkov
 */

abstract class Kohana_Jelly_Behavior_Uploadable extends Jelly_Behavior 
{	
	public $_thumbnails = array();
	public $_server = NULL;
	public $_save_size = FALSE;
	public $_path = NULL;

	public function initialize(Jelly_Event $event, $model, $name) 
	{
		parent::initialize($event, $model, $name);
		
		Jelly::meta($model)->field($name, Jelly::field('upload_image', array(
			'path' => $this->_path, 
			'thumbnails' => $this->_thumbnails, 
			'server' => $this->_server, 
			'save_size' => $this->_save_size
		)));
		
		if ($this->_save_size)
		{
			Jelly::meta($model)->field($name.'_width', Jelly::field('integer'));
			Jelly::meta($model)->field($name.'_height', Jelly::field('integer'));
		}
	}

	public function model_before_save(Jelly_Model $model, Jelly_Event_Data $data)
	{
		if ($model->changed($this->_name) AND is_file($model->{$this->_name}->file()))
		{
			list($model->{$this->_name.'_width'}, $model->{$this->_name.'_height'}) = getimagesize($model->{$this->_name}->file());
		}
	}
	
}