<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Jam_Association_Taxonomy_Terms extends Jam_Association_Collection {

	public $through = 'terms_items';
	public $foreign = 'term.id';
	public $vocabulary = NULL;
	public $vocabulary_model = 'vocabulary';

	/**
	 * Sets up foreign and through properly.
	 *
	 * @param   string  $model
	 * @param   string  $name
	 * @return  void
	 */
	public function initialize(Jam_Meta $meta, $model, $name)
	{
		// Is it model.field?
		if (is_string($this->foreign) AND FALSE === strpos($this->foreign, '.'))
		{
			$this->foreign = $this->foreign.'.'.Jam::meta($this->foreign)->primary_key();
		}

		// Create the default through connection
		if (is_string($this->through))
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
		$builder = parent::join($builder, $alias, $type)
			->join($this->through(), $type)
			->on($this->through('item'), '=', "{$this->model}.:primary_key")
			->on($this->through('model'), '=', DB::expr("\"{$this->model}\""))
			->join($this->foreign(NULL, $alias), $type)
			->on($this->through('term'), '=', $this->foreign('field', $alias));

		if ($this->vocabulary)
		{
			$this->join_vocabulary($builder);
		}
		return $builder;
	}

	public function join_vocabulary(Jam_Builder $builder)
	{
		$builder
			->join($this->vocabulary_model)
			->on("{$this->vocabulary_model}.:primary_key", '=', $this->foreign().'.'.Jam::meta($this->vocabulary_model)->foreign_key());

		if (is_array($this->vocabulary))
		{
			$builder->on("{$this->vocabulary_model}.:name_key", 'IN', DB::expr(Database::instance($builder->db())->quote($this->vocabulary)));
		}
		else
		{
			$builder->on("{$this->vocabulary_model}.:name_key", '=', DB::expr(Database::instance($builder->db())->quote($this->vocabulary)));
		}		
	}

	public function model_from_array($array)
	{
		if (is_array($array)) 
		{
			$key = Arr::get($array, Jam::meta($this->foreign())->primary_key());

			if ( ! $key)
			{
				$key = Arr::get($array, Jam::meta($this->foreign())->name_key());	
			}
			
			if (trim($key))
			{
				$array = Jam::factory($this->foreign(), $key)->set($array);
				if ( ! $array->loaded())
				{
					$array->is_hidden = TRUE;
					
					if ( ! $array->slug)
					{
						$array->slug = $array->build_slug();
					}
					if ( ! is_array($this->vocabulary))
					{
						$array->vocabulary = $this->vocabulary;
					}
				}
			}
		}

		return parent::model_from_array($array);
	}

	public function builder(Jam_Model $model)
	{
		$builder = parent::builder($model)
			->join($this->through())
			->on($this->through('term'), '=', $this->foreign('field'))
			->on($this->through('model'), '=', DB::expr("\"{$this->model}\""))
			->where($this->through('item'), '=', $model->id());

		if ($this->vocabulary)
		{
			$this->join_vocabulary($builder);
		}

		return $builder;
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
				->where($this->through('item'), '=', $model->id())
				->where($this->through('model'), '=', $model->meta->model())
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
					->where($this->through('term'), 'IN', $old_ids)
					->delete($model->meta()->db());
			}

			if ($new_ids)
			{
				foreach ($new_ids as $new_id)
				{
					Jam::query($this->through())
						 ->columns(array_values($this->through['fields']))
						 ->values(array($model->id(), $new_id, $model->meta()->model()))
						 ->insert($model->meta()->db());
				}
			}
		}
	}
}
