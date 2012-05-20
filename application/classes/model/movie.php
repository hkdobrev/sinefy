<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Movie extends ORM {
	protected $_has_many = array(
		'users'	=> array(
			'through' => 'movies_user'
		),
		'movies_users' => array()
	);

	public function watched($movie_id)
	{
		return (bool) $this->where('watched', '=', '1')
			->where('movie.id', '=', $movie_id)
					->count_all();
	}

	public function wishlist($movie_id)
	{
		return (bool) $this
			->where('wishlist', '=', '1')
			->where('movie.id', '=', $movie_id)
					->count_all();
	}
}
