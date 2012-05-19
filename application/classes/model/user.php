<?php defined('SYSPATH') OR die('No direct script access.');

class Model_User extends Model_Auth_User {


	protected $_has_many = array(
		'user_tokens' => array('model' => 'user_token'),
		'movies' => array(
			'through' => 'movies_users'
		)
	);

	public function filters()
	{
		return array();
	}

	public function rules()
	{
		return array(
			'facebook_id' => array(
				array('not_empty'),
				array('numeric'),
				array(array($this, 'unique'), array('facebook_id', ':value'))
			),
			'email' => array(
				array('not_empty'),
				array('email'),
				array(array($this, 'unique'), array('email', ':value')),
			),
		);
	}

	/**
	 * Tests if a unique key value exists in the database.
	 *
	 * @param   mixed    the value to test
	 * @param   string   field name
	 * @return  boolean
	 */
	public function unique_key_exists($value, $field = NULL)
	{
		if ($field === NULL)
		{
			// Automatically determine field by looking at the value
			$field = $this->unique_key($value);
		}

		return (bool) DB::select(array('COUNT("*")', 'total_count'))
			->from($this->_table_name)
			->where($field, '=', $value)
			->where($this->_primary_key, '!=', $this->pk())
			->execute($this->_db)
			->get('total_count');
	}

	/**
	 * Allows a model use both email and username as unique identifiers for login
	 *
	 * @param   string  unique value
	 * @return  string  field name
	 */
	public function unique_key($value)
	{
		return 'facebook_id';
	}

	public function populate_from_facebook($data)
	{
		return $this->values(array(
			'facebook_id' => (int) Arr::get($data, 'id'),
			'email' => Arr::get($data, 'email'),
			'name' => Arr::get($data, 'name'),
		));
	}
}


