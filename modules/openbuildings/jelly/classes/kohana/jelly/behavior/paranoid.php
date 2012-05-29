<?php

class Kohana_Jelly_Behavior_Paranoid extends Jelly_Behavior
{
	const ALL = 'all';
	const DELETED = 'deleted';
	const NORMAL = 'normal';

	protected $_field = 'is_deleted';

	public function initialize(Jelly_Event $event, $model, $name) 
	{
		parent::initialize($event, $model, $name);  

		Jelly::meta($model)
			->field($this->_field, Jelly::field('boolean', array('default' => FALSE)));
	}

	public function builder_before_select(Jelly_Builder $builder, Jelly_Event_Data $data)
	{

		switch ($builder->params('paranoid_type'))
		{
			case Jelly_Behavior_Paranoid::ALL:
			break;

			case Jelly_Behavior_Paranoid::DELETED:
				$builder->where($this->_field, '=', TRUE);
			break;

			case Jelly_Behavior_Paranoid::NORMAL:
			default:
				$builder->where($this->_field, '=', FALSE);
			break;
		}
	}

	public function builder_call_deleted(Jelly_Builder $builder, Jelly_Event_Data $data, $paranoid_type = Jelly_Behavior_Paranoid::NORMAL)
	{
		if ( ! in_array($paranoid_type, array(Jelly_Behavior_Paranoid::DELETED, Jelly_Behavior_Paranoid::NORMAL, Jelly_Behavior_Paranoid::ALL)))
			throw new Kohana_Exception("Deleted type should be Jelly_Behavior_Paranoid::DELETED, Jelly_Behavior_Paranoid::NORMAL or Jelly_Behavior_Paranoid::ALL");

		$builder->params('paranoid_type', $paranoid_type);
	}

	public function model_before_delete(Jelly_Model $model, Jelly_Event_Data $data)
	{
		if ( ! $model->_real_delete)
		{
			$data->stop = TRUE;

			foreach ($model->meta()->associations() as $association)
			{
				$association->delete($model, $model->id());
			}

			Jelly::query($model->meta()->model())->value($this->_field, TRUE)->key($model->id())->update();

			$data->return = FALSE;
		}
	}

	public function model_call_real_delete(Jelly_Model $model, Jelly_Event_Data $data)
	{
		$model->_real_delete = TRUE;
		$data->stop = TRUE;
		$data->return = $model->delete();
	}

	public function model_call_restore_delete(Jelly_Model $model, Jelly_Event_Data $data)
	{
		Jelly::query($model->meta()->model())->value($this->_field, FALSE)->key($model->id())->update();
	}
}