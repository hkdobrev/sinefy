<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Handles belongs to relationships
 *
 * @package    Jelly
 * @category   Associations
 * @author     Ivan Kerin
 * @copyright  (c) 2010-2011 OpenBuildings
 * @license    http://www.opensource.org/licenses/isc-license.txt
 */
abstract class Kohana_Jelly_Association_BelongsTo extends Jelly_Association {

	/**
	 * Indicates whether this is a polymorphic association. Will add the polymorphic field,
	 * named <name>_model, if you set this as a string you can change the name of the field to it.
	 * @var boolean|string
	 */
	public $polymorphic = FALSE;

	/**
	 * The name of the accual field holding the id of the associated model. Defaults to
	 * <name>_id
	 * @var string
	 */
	public $column = '';

	/**
	 * Default value of the column in the database
	 * @var integer
	 */
	public $default = 0;
	
	public $touch = FALSE;
	/**
	 * Automatically sets foreign to sensible defaults.
	 *
	 * @param   string  $model
	 * @param   string  $name
	 * @return  void
	 */
	public function initialize(Jelly_Meta $meta, $model, $name)
	{
		// Default to the name of the column
		if (empty($this->foreign))
		{
			$this->foreign = $name.'.:primary_key';
		}
		// Is it model.field?
		elseif (FALSE === strpos($this->foreign, '.'))
		{
			$this->foreign = $this->foreign.'.:primary_key';
		}

		// Default to the foreign model's primary key
		if (empty($this->column))
		{
			$this->column = $name.'_id';
		}
		
		if ($this->touch === TRUE)
		{
			$this->touch = 'updated';
		}
		
		if ($this->column === $name)
			throw new Kohana_Exception("In association :name for model :model - invalid column name. Field and Association cannot be the same name", array(
					':model' => $model,
					':name' => ':name'
				));
		
		/**
		 * Assign the accual field in the database. Default value can be set with $this->default
		 */
		$meta->field($this->column, Jelly::field('integer', array("default" => $this->default)));

		// We initialize a bit earlier as we want to modify the $fthis->oreign array
		parent::initialize($meta, $model, $name);

		if ($this->polymorphic)
		{
			if ( ! is_string($this->polymorphic))
			{
				$this->polymorphic = $name.'_model';
			}
			$this->foreign['model'] = $this->polymorphic;

			$meta->field($this->polymorphic, Jelly::field('string'));
		}
	}

	public function is_polymorphic()
	{
		return (bool) $this->polymorphic;
	}

	public function join(Jelly_Builder $builder, $alias = NULL, $type = NULL)
	{
		return parent::join($builder, $alias, $type)
			->join($this->foreign(NULL, $alias), $type)
			->on($this->foreign('field', $alias), '=', $this->model.'.'.$this->column);
	}

	public function builder(Jelly_Model $model)
	{
		if ($this->is_polymorphic())
		{
			$parent_model = $model->{$this->polymorphic};

			if ( ! $parent_model)
				return NULL;

			$builder = Jelly::query($parent_model)
				->limit(1)
				->select_column(array("$parent_model.*"))
				->where($parent_model.'.'.$this->foreign['field'], '=', $model->{$this->column});

			$this->apply_conditions($builder);
		}
		else
		{
			$builder = parent::builder($model)
				->limit(1)
				->where($this->foreign('field'), '=', $model->{$this->column});
		}

		return $builder;
	}

	public function after_check(Jelly_Model $model, Jelly_Validation $validation, $new_item)
	{
		if ($this->required)
		{
			if ( ! (($new_item AND $new_item instanceof Jelly_Model) OR ($model->{$this->column} > 0)))
			{
				$validation->error($this->name, 'required');
			}
		}
		
		parent::after_check($model, $validation, $new_item);
	}

	public function get(Jelly_Model $model)
	{
		$builder = $this->builder($model);
		// Polymorphic associations can return a NULL builder if the model column is empty
		return $builder ? $builder->find() : $builder;
	}

	public function set(Jelly_Model $model, $new_item)
	{
		if ($new_item)
		{
			$new_item = $this->model_from_array($new_item);

			if ($this->is_polymorphic())
			{
				$model->set($this->polymorphic, $new_item->meta()->model());
			}

			if ($new_item->loaded())
			{
				$model->set($this->column, $new_item->id());
			}
		}
		else
		{
			$model->set($this->column, NULL);

			if ($this->polymorphic)
			{
				$model->set($this->polymorphic, NULL);
			}
		}

		return $new_item;
	}

	public function assign_relation(Jelly_Model $model, $item)
	{
		$item = parent::assign_relation($model, $item);
		$model->set($this->name, $item);
		return $item;
	}

	public function create(Jelly_Model $model, array $attributes = NULL)
	{
		$new_item = parent::create($model, $attributes);
		$model->set($this->column, $new_item->id());
		return $new_item;
	}

	public function before_save(Jelly_Model $model, $new_item, $is_changed)
	{
		if ($is_changed)
		{
			if ($new_item)
			{
				if ( ! $new_item->loaded())
				{
					$this->preserve_item_changes($new_item);
				}
				$this->set($model, $new_item);
			}
		}
	}
	
	public function after_save(Jelly_Model $model, $value, $is_changed) 
	{
		$value_id = ($value AND $value->loaded()) ? $value->id() : $model->{$this->column};
		
		if ($this->is_polymorphic()) {
			$value_model = ($value AND $value->loaded()) ? $value->meta()->model() : $model->{$this->polymorphic};
		}
		else
		{
			$value_model = $this->foreign();
		}
		
		if ($this->touch AND $value_id)
		{						
			Jelly::query($value_model)
				->key($value_id)
				->value($this->touch, Jelly::meta($value_model)->field($this->touch)->save(NULL, NULL, TRUE))
				->update();
		}
	}

	public function delete(Jelly_Model $model, $key)
	{
		if ($this->dependent == Jelly_Association::DELETE)
		{
			$this->get($model)->delete();
		}
		elseif ($this->dependent == Jelly_Association::ERASE)
		{
			$this->builder($model)->delete();	
		}
	}
} // End Kohana_Jelly_Field_BelongsTo