<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Core class that all associations must extend
 *
 * @package    Jelly
 * @category   Associations
 * @author     Ivan Kerin
 * @license    http://www.opensource.org/licenses/isc-license.txt
 */
abstract class Kohana_Jelly_Association {

	const NULLIFY  = 'nullify';
	const ERASE    = 'erase';
	const DELETE   = 'delete';

	/**
	 * @var  string  the model's name
	 */
	public $model;

	/**
	 * @var  string  a pretty name for the field
	 */
	public $label;

	/**
	 * @var  string  the field's name in the form
	 */
	public $name;

	/**
	 * @var string the foreign relationship model and field - model or model.field
	 */
	public $foreign = '';

	/**
	 * This is used to define the inverse association (has_many/has_one -> belongs_to)
	 * @var string
	 */
	public $inverse_of = NULL;

	/**
	 * And Arry of conditions to be applied on the builder for this associaiton,
	 * Example array('where' => array('id', '=', '2'), 'or_where' => array('name', '=', 'name'))
	 * @var array
	 */
	public $conditions;

	/**
	 * If set to true, will delete the association object when this one gets deleted
	 * possible values are Jelly_Association::DELETE and Jelly_Association::ERASE and Jelly_Association::NULLIFY
	 * Jelly_Association::DELETE will run the delete event of the associated model, Jelly_Association::ERASE will not
	 * @var boolean|string
	 */
	public $dependent = FALSE;


	public $required = FALSE;
	
	/**
	 * Sets all options.
	 *
	 * @param  array  $options
	 */
	public function __construct($options = array())
	{
		if (is_array($options))
		{
			// Just throw them into the class as public variables
			foreach ($options as $name => $value)
			{
				$this->$name = $value;
			}
		}
	}

	/**
	 * Default initialize set model, name and foreign variables
	 * @param  Jelly_Meta $meta
	 * @param  string     $model   the model name 
	 * @param  string     $name    the name of the association 
	 * @return NULL            
	 */
	public function initialize(Jelly_Meta $meta, $model, $name)
	{
		// This will come in handy for setting complex relationships
		$this->model = $model;

		// This is for naming form fields
		$this->name = $name;

		// Check for a name, because we can easily provide a default
		if ( ! $this->label)
		{
			$this->label = Inflector::humanize($name);
		}

		if ( ! is_string($this->foreign))
			throw new Kohana_Exception("Cannot initialize association :association for model :model: foreign field must be a string",
				array(':association' => $name, ':model' => $model));

		// Convert $this->foriegn to an array for easier access
		$this->foreign = array_combine(array('model', 'field'), explode('.', $this->foreign));
	}

	/**
	 * Get the relevant Jelly_Model or Jelly_Collection
	 * @param  Jelly_Model $model the model to query against
	 * @return Jelly_Model|Jelly_Collection
	 */
	abstract public function get(Jelly_Model $model);

	/**
	 * Get the relevant Jelly_Model or Jelly_Collection
	 * @param  Jelly_Model $model the model to set against
	 * @param  mixed $value 
	 * @return Jelly_Model $this
	 */
	abstract public function set(Jelly_Model $model, $value);

	/**
	 * This method should perform stuff on model delete
	 * @param  Jelly_Model $model
	 * @param  mixed $value
	 * @return NULL
	 */
	abstract public function delete(Jelly_Model $model, $value);


	/**
	 * This method should perform stuff before its saved
	 * @param  Jelly_Model $model
	 * @param  mixed $value
	 * @return NULL                   
	 */
	public function before_save(Jelly_Model $model, $value, $is_changed)
	{
	}

	/**
	 * This method should perform a check after the parent model is checked
	 * @param  Jelly_Model $model
	 * @param  mixed $value
	 * @return NULL                   
	 */
	public function after_check(Jelly_Model $model, Jelly_Validation $validation, $new_item)
	{
		if ($new_item AND ! $new_item->check())
		{
			$validation->error($this->name, 'validation');
		}
	}
	/**
	 * This method should perform stuff after its saved
	 * @param  Jelly_Model $model
	 * @param  mixed $value
	 * @return NULL                   
	 */
	public function after_save(Jelly_Model $model, $value, $is_changed)
	{
		
	}

	/**
	 * Convert an array to a model. Handle polymorphic associations with one more level of arrays. 
	 * Load and update objects if they you pass an id in the array
	 * @param  array|string  $array       
	 * @param  boolean $polymorphic 
	 * @return Jelly_Model               The converted item
	 */
	public function model_from_array($array)
	{
		if ($array instanceof Jelly_Model)
			return $array;

		if ($this->is_polymorphic())
		{
			if ( ! is_array($array))
				throw new Kohana_Exception('Model :model, association :name is polymorphic so you can only mass assign arrays', 
					array(':model' => $this->model, ':name' => $this->name));
				
			$foreign_model = key($array);
			$array = reset($array);

			if ( ! Jelly::meta($foreign_model))
				throw new Kohana_Exception('Model :model, association :name is polymorphic and in mass assignment, model ":new_model" does not exist or the array is not constructed properly ( must be array("model" => aray("fields"...)) )', 
					array(':model' => $this->model, ':name' => $this->name, ':new_model' => $foreign_model));
		}
		else
		{
			$foreign_model = $this->foreign();
		}

		if (is_array($array)) 
		{
			$key = Arr::get($array, Jelly::meta($foreign_model)->primary_key());
			$item = Jelly::factory($foreign_model, $key)->set($array);
		}
		else
		{
			$item = Jelly::factory($foreign_model, $array);
		}

		return $item;
	}

	/**
	 * See if the association is polymorphic.
	 * @return boolean 
	 */
	public function is_polymorphic()
	{
		return FALSE;
	}

	/**
	 * Help the builder join the association
	 * @param  Jelly_Builder $builder
	 * @param  string $alias
	 * @param  string $type To be used by all joins
	 * @return $this             
	 */
	public function join(Jelly_Builder $builder, $alias = NULL, $type = NULL)
	{
		return $this->apply_conditions($builder);
	}

	/**
	 * Create the builder required to load the associated models
	 * @param  Jelly_Model $model parent model
	 * @return Jelly_Builder             
	 */
	public function builder(Jelly_Model $model)
	{
		return $this->apply_conditions(Jelly::query($this->foreign()));
	}

	/**
	 * This method is executed for each child model so that it's values are properly assigned
	 * @param  Jelly_Model $model parent model
	 * @param  Jelly_Model|mixed  $item  child model item
	 * @return Jelly_Model        $item
	 */
	public function assign_relation(Jelly_Model $model, $item)
	{
		return $this->assign_inverse($model, $item);
	}

	/**
	 * This method is used to create a child model, that is connected to the parent model with the association
	 * @param  Jelly_Model $model      parent model
	 * @param  array       $attributes attributes to set for the new model
	 * @return Jelly_Model             
	 */
	public function build(Jelly_Model $model, array $attributes = NULL)
	{
		return $this->assign_relation($model, Jelly::factory($this->foreign())->set($attributes));
	}

	/**
	 * The same as build, but save the model to the database
	 * @param  Jelly_Model $model      parent model
	 * @param  array       $attributes attributes to set for the new model
	 * @return Jelly_Model             
	 */
	public function create(Jelly_Model $model, array $attributes = NULL)
	{
		return $this->build($model, $attributes)->save();
	}

	/**
	 * Used to easily get field names for the builder
	 * @param  string $field_name name of the foreign field
	 * @return string
	 */
	public function foreign($field_name = NULL, $alias = NULL)
	{
		if ($field_name)
		{
			$model = $alias ? $alias : $this->foreign['model'];
			return $model.'.'.Arr::get($this->foreign, $field_name, $field_name);
		}
		else
		{
			return $alias ? array($this->foreign['model'], $alias) : $this->foreign['model'];
		}
		
	}

	/**
	 * Apply the conditions array of this association to a builder
	 * @param  Jelly_Builder $builder 
	 * @return JellY_Builder
	 */
	public function apply_conditions(Jelly_Builder $builder)
	{
		if ($this->conditions)
		{
			foreach ($this->conditions as $type => $args) 
			{
				call_user_func_array(array($builder, $type), $args);		
			}
		}

		return $builder;
	}

	/**
	 * Assigns the inverse model for the association
	 * @param  Jelly_Model $model parent model
	 * @param  Jelly_Model $item  child model
	 * @return Jelly_Model        $item
	 */
	public function assign_inverse(Jelly_Model $model, Jelly_Model $item)
	{
		if ($this->inverse_of)
		{
			$item->retrieved($this->inverse_of, $model);
		}
		return $item;
	}

	/**
	 * If the item is changed or not yet saved - save it to the database
	 * @param  Jelly_Model $item 
	 * @return Jelly_Model         $item
	 */
	public function preserve_item_changes(Jelly_Model $item)
	{
		if ($item->changed() OR ! $item->loaded())
		{
			$item->save();
		}
		return $item;
	}
} // End Kohana_Jelly_Field