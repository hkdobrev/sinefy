<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Jam_Association_Taxonomy_Items extends Jam_Association_Collection {

	public $through = 'terms_items';

	/**
	 * Sets up foreign and through properly.
	 *
	 * @param   string  $model
	 * @param   string  $name
	 * @return  void
	 */
	public function initialize(Jam_Meta $meta, $model, $name)
	{
		if (empty($this->foreign))
		{
			$this->foreign = Inflector::singular($name);
		}
		// Is it model.field?
		if (is_string($this->foreign) AND FALSE === strpos($this->foreign, '.'))
		{
			$this->foreign = $this->foreign.'.'.Jam::meta($this->foreign)->primary_key();
		}

		// Create the default through connection
		if (empty($this->through) OR is_string($this->through))
		{
			$this->through = array(
				'model' => $this->through,
				'fields' => array(
					'item' => 'item_id',
					'term' => 'term_id',
					'model' => 'item_model',
				)
			);
		}

		parent::initialize($meta, $model, $name);
	}

	public function join(Jam_Builder $builder, $alias = NULL, $type = NULL)
	{
		return parent::join($builder, $alias, $type)
			->join($this->through(), $type)
			->on($this->through('term'), '=', "term.:primary_key")
			->join($this->foreign(NULL, $alias), $type)
			->on($this->through('item'), '=', $this->foreign('field', $alias))
			->on($this->through('model'), '=', DB::expr("\"{$this->foreign()}\""));
	}

	public function builder(Jam_Model $model)
	{
		return parent::builder($model)
			->join($this->through())
			->on($this->through('item'), '=', $this->foreign('field'))
			->on($this->through('model'), '=', DB::expr("\"{$this->foreign()}\""))
			->where($this->through('term'), '=', $model->id());
	}

	public function delete(Jam_Model $model, $key)
	{
		if ($this->dependent == Jam_Association::DELETE)
		{
			foreach ($this->get($model) as $item) 
			{
				$item->delete();
			}
		}
		elseif ($this->dependent == Jam_Association::ERASE)
		{
			$this->builder($model)->delete();

			Jam::query($this->through())
				->where($this->through('term'), '=', $model->id())
				->delete($model->meta()->db());
		}		
	}

	public function after_save(Jam_Model $model, $collection, $is_changed)
	{
		if ($is_changed AND $collection AND $collection->changed())
		{
			list($old_ids, $new_ids) = $this->diff_collection_ids($model, $collection);

			if ($old_ids)
			{
				Jam::query($this->through())
					->where($this->through('item'), 'IN', $old_ids)
					->where($this->through('model'), '=', $this->foreign())
					->delete($model->meta()->db());
			}

			if ($new_ids)
			{
				Jam::query($this->through())
					 ->columns(array_values($this->through['fields']))
					 ->values(array($new_id, $model->id(), $this->foreign()))
					 ->insert($model->meta()->db());
			}
		}
	}
}
