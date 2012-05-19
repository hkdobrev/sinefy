<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Movie extends ORM {
	protected $_has_many = array(
		'users'	=> array(
			'through' => 'movies_user'
		)
	);

	public function watched()
	{
		return $this->where('watched', '=', '1')
					->find()
					->loaded();
	}

	public function wishlist()
	{
		return $this->where('wishlist', '=', '1')
					->find()
					->loaded();
	}
}