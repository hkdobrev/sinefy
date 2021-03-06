<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Jelly Collection
 *
 * Jelly_Collection encapsulates a Database_Result object. It has the exact same API.
 * It offers a few special features that make it useful:
 *
 *  - Only one model is instantiated for the whole result set, which
 *    is significantly faster in terms of performance.
 *  - It is easily extensible, so things like polymorphism and
 *    recursive result sets can be easily implemented.
 *
 * Jelly_Collection likes to know what model its result set is related to,
 * though it's not required. Some features may disappear, however, if
 * it doesn't know the model it's working with.
 *
 * @package    Jelly
 * @category   Query/Result
 * @author     Jonathan Geiger
 * @copyright  (c) 2010-2011 Jonathan Geiger
 * @license    http://www.opensource.org/licenses/isc-license.txt
 */
abstract class Kohana_Jelly_Collection implements Iterator, Countable, SeekableIterator, ArrayAccess {

	/**
	 * @var  Jelly_Meta  The current meta object, based on the model we're returning
	 */
	protected $_meta = NULL;

	/**
	 * @var  Jelly_Model  The current class we're placing results into
	 */
	protected $_model = NULL;

	/**
	 * @var  Jelly_Collection|array|mixed  The current result set
	 */
	protected $_result = NULL;

	protected $_changed = FALSE;

	/**
	 * @var  Jelly_Builder the builder that built this jelly collection
	 */
	protected $_builder = NULL;

	/**
	 * @var  Jelly_Model 
	 */
	protected $_parent = NULL;


	/**
	 * Tracks a database result
	 *
	 * @param  mixed  $model
	 * @param  mixed  $result
	 */
	public function __construct($result, $model = NULL)
	{
		if ($result instanceof Jelly_Collection OR is_array($result) OR is_numeric($result) OR ! $result)
		{
			$this->result($this->_convert_to_array($result));
		}
		elseif ($result instanceof Jelly_Builder)
		{
			$this->_builder = $result;
		}
		else
		{
			$this->_result = $result;
		}

		// Load our default model
		if ($model AND Jelly::meta($model))
		{
			$this->_model = ($model instanceof Jelly_Model) ? $model : new $model;
			$this->_meta  = $this->_model->meta();
		}
	}

	/**
	 * Converts MySQL Results to Cached Results, since MySQL resources are not serializable.
	 *
	 * @return  array
	 */
	public function __sleep()
	{
		if ( ! $this->_result instanceof Database_Result_Cached)
		{
			$this->_result = new Database_Result_Cached($this->result()->as_array(), '');
		}

		return array_keys(get_object_vars($this));
	}

	/**
	 * Returns a string representation of the collection.
	 *
	 * @return  string
	 */
	public function __toString()
	{
		return get_class($this).': '.Jelly::model_name($this->_model).' ('.$this->count().')';
	}

	protected function _convert_to_array($items)
	{
		if ($items instanceof Jelly_Collection)
		{
			$array = $items->as_array();
		}
		elseif ( ! is_array($items)) 
		{
			$array = array($items);
		}
		else
		{
			$array = $items;
		}
		return array_filter($array);
	}

	public function _parent_association(Jelly_Model $parent, Jelly_Association_Collection $association)
	{
		$this->_association = $association;
		$this->_parent = $parent;

		return $this;
	}

	public function changed($changed = NULL)
	{
		if ($changed !== NULL)
		{
			if ( ! ($this->_result instanceof Jelly_Collection_Data))
			{
				$this->_result = new Jelly_Collection_Data($this->result()->as_array());
			}
			$this->_changed = $changed;
		}
		return $this->_changed;
	}

	public function result($result = NULL)
	{
		if ($result !== NULL)
		{
			$this->_changed = TRUE;
			$this->_result = new Jelly_Collection_Data($result);
			return $this;
		}

		if ($this->_result === NULL)
		{
			$result = $this
				->_builder
				->database_query(Database::SELECT)
				->as_assoc()
				->execute($this->_builder->db());

			$this->_result = $result;
		}

		return $this->_result;
	}

	/**
	 * Returns the collection's meta object, if it exists.
	 *
	 * @return  Jelly_Meta
	 */
	public function meta()
	{
		return $this->_meta;
	}

	/**
	 * Return all of the rows in the result as an array.
	 *
	 * @param   string  $key   column for associative keys
	 * @param   string  $value column for values
	 * @return  array
	 */
	public function as_array($key = NULL, $value = NULL)
	{
		if ($this->_builder)
		{
			if ($key === NULL AND $value == NULL)
			{
				return array_map(array($this, '_load'), $this->result()->as_array());
			}

			if (strpos($key, ':') !== FALSE)
			{
				if ( ! $this->_builder->meta())
					throw new Kohana_Exception("Builder :builder must have a meta", array(':builder' => $this->_builder));

				$state = $this->_builder->_meta_alias($key, array('model' => $this->_builder->meta()->model(), 'field' => $key, 'value' => NULL));
				$key = $state['field'];
			}

			if (strpos($value, ':') !== FALSE)
			{
				if ( ! $this->_builder->meta())
					throw new Kohana_Exception("Builder :builder must have a meta", array(':builder' => $this->_builder));
				
				$state = $this->_builder->_meta_alias($value, array('model' => $this->_builder->meta()->model(), 'field' => $value, 'value' => NULL));
				$value = $state['field'];
			}

			if ($value === NULL)
			{
				return array_map(array($this, '_load'), $this->result()->as_array($key));
			}
		}
		return $this->result()->as_array($key, $value);
	}

	/**
	 * Implementation of the Iterator interface
	 * @return  Jelly_Collection
	 */
	public function rewind()
	{
		$this->result()->rewind();
		return $this;
	}

	/**
	 * Implementation of the Iterator interface
	 *
	 * @return  Jelly_Model|array
	 */
	public function current()
	{
		// Database_Result causes errors if you call current()
		// on an object with no results, so we check first.
		if ($this->result()->count())
		{
			$result = $this->result()->current();
		}
		else
		{
			$result = array();
		}

		return $this->_load($result);
	}

	/**
	 * Implementation of the Iterator interface
	 * @return  int
	 */
	public function key()
	{
		return $this->result()->key();
	}

	/**
	 * Implementation of the Iterator interface
	 * @return  Jelly_Collection
	 */
	public function next()
	{
		$this->result()->next();
		return $this;
	}

	/**
	 * Implementation of the Iterator interface
	 *
	 * @return  boolean
	 */
	public function valid()
	{
		return $this->result()->valid();
	}

	/**
	 * Implementation of the Countable interface
	 *
	 * @return  int
	 */
	public function count()
	{
		return count($this->result());
	}

	/**
	 * Implementation of SeekableIterator
	 *
	 * @param   mixed  $offset
	 * @return  boolean
	 */
	public function seek($offset)
	{
		return $this->result()->seek($offset);
	}

	/**
	 * ArrayAccess: offsetExists
	 *
	 * @param   mixed  $offset
	 * @return  boolean
	 */
	public function offsetExists($offset)
	{
		return $this->result()->offsetExists($offset);
	}

	/**
	 * ArrayAccess: offsetGet
	 *
	 * @param   mixed  $offset
	 * @param   bool   $object
	 * @return  array|Jelly_Model
	 */
	public function offsetGet($offset, $object = TRUE)
	{
		return $this->_load($this->result()->offsetGet($offset), $object);
	}

	/**
	 * ArrayAccess: offsetSet
	 *
	 * @throws  Kohana_Exception
	 * @param   mixed  $offset
	 * @param   mixed  $value
	 * @return  void
	 */
	public function offsetSet($offset, $value)
	{
		$this->changed(TRUE);

		$this->result()->offsetSet($offset, $value);

		if ($this->_parent AND $value instanceof Jelly_Model)
		{
			$this->_association->assign_relation($this->_parent, $value);
		}
	}

	/**
	 * ArrayAccess: offsetUnset
	 *
	 * @throws  Kohana_Exception
	 * @param   mixed  $offset
	 * @return  void
	 */
	public function offsetUnset($offset)
	{
		$this->changed(TRUE);

		$this->result()->offsetUnset($offset);
	}

	/**
	 * Loads values into the model.
	 *
	 * @param   array  $values
	 * @return  Jelly_Model|array
	 */
	protected function _load($values)
	{
		if ($this->_model)
		{
			if ($values instanceof Jelly_Model)
			{
				$loaded = $values;
			}
			elseif ( ! is_array($values)) 
			{
				$loaded = Jelly::factory($this->_meta->model(), $values);
			}
			else
			{
				$model = clone $this->_model;

				// Don't return models when we don't have one
				$loaded = $values
				        ? $model->load_values($values)
				        : $model->clear();
			}

			if ($this->_parent)
			{
				$this->_association->assign_inverse($this->_parent, $loaded);
			}

			return $loaded;

		}

		return $values;
	}

	protected function _id($values)
	{
		if ($this->_model)
		{
			if ($values instanceof Jelly_Model)
			{
				return $values->id();
			}
			elseif (is_numeric($values)) 
			{
				return $values;
			}
			elseif (is_array($values)) 
			{
				return Arr::get($values, $this->_meta->primary_key());
			}
			elseif (is_string($values))
			{
				return Jelly::factory($this->_meta->model(), $values)->id();
			}
			else
			{
				throw new Kohana_Exception("Checking for id can be done only with numeric, Jelly_Model or array of values");
			}
		}

		return Arr::get($values, 'id');
	}


	public function reload()
	{
		$this->_result = NULL;
		return $this;
	}

	public function parent()
	{
		return $this->_parent;
	}

	public function add($item)
	{
		$items = $this->_convert_to_array($item);

		foreach ($items as $item) 
		{
			$this->offsetSet($this->search($item), $item);	
		}
		
		return $this;
	}

	public function remove($item)
	{
		$items = $this->_convert_to_array($item);

		foreach ($items as $item) 
		{
			$offset = $this->search($item);

			if ($offset !== NULL)
			{
				$this->offsetUnset($offset, $item);
			}
		}

		return $this;
	}

	public function remove_insist($item)
	{
		if ($offset = $this->search($item))
		{
			$this->offsetUnset($offset, $item);
			return $this;
		}
		throw new Jelly_Exception_Missing("Item does not exist in collection");
	}

	public function ids(array $ids = NULL)
	{
		if ($ids !== NULL)
		{
			$this->result($ids);
			return $this;
		}

		return array_map(array($this, '_id'), $this->result()->as_array());
	}

	public function clear()
	{
		return $this->result(array());
	}

	public function build(array $attributes = NULL)
	{
		$item = $this->_association->build($this->_parent, $attributes);
		$this->add($item);

		return $item;
	}

	public function create(array $attributes = NULL)
	{
		$item = $this->_association->create($this->_parent, $attributes);
		$this->add($item);
		return $item;
	}

	/**
	 * Search for an item in the collection.
	 * @param  integer|string|Jelly_Model $item You can pass primary key, name key or a model object.
	 * @return integer|NULL If an item is found its index would be returned, else NULL is returned.
	 */
	public function search($item)
	{
		$item_id = $this->_id($item);

		foreach ($this->result() as $offset => $current)
		{
			if ($this->_id($current) == $item_id)
			{
				return (int) $offset;
			}
		}
		return NULL;
	}

	/**
	 * Check if an item exists in the collection.
	 * You can pass primary key, name key or a model object.
	 * @param  integer|string|Jelly_Model $item You can pass primary key, name key or a model object.
	 * @return boolean whether the item exists in the collection
	 */
	public function exists($item)
	{
		return $this->search($item) !== NULL;
	}

	/**
	 * Get a model object for the first element in the collection.
	 * @return Jelly_Model|NULL if there are no elements in the collection NULL is returned.
	 */
	public function first()
	{
		if ($this->count())
		{
			return $this->offsetGet(0);
		}
		else
		{
			return NULL;
		}
	}

	/**
	 * Get a model object for the last element in the collection
	 * @return Jelly_Model|NULL if there are no elements in the collection NULL is returned.
	 */
	public function last()
	{
		if ($count = $this->count())
		{
			return $this->offsetGet($count - 1);
		}
		else
		{
			return NULL;
		}
	}

	/**
	 * Get an element from the collection at a certain index.
	 * If there are no elements in the collection or there is no such index NULL is returned.
	 * 
	 * [!!] Indexes start at 0!
	 * 
	 * @param  integer $index   The index to get the element at
	 * @return Jelly_Model|NULL A model object from the element or NULL
	 */
	public function at($index)
	{
		if ($index >=0 AND $count = $this->count() AND $index < $count)
		{
			return $this->offsetGet($index);
		}
		else
		{
			return NULL;
		}
	}

} // End Kohana_Jelly_Collection