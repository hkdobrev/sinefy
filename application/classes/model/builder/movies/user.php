<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Builder_Movies_User extends Jam_Builder {

	public function watched($movie_id)
	{
		return (bool) $this
			->where('movies_user.movie_id', '=', $movie_id)
			->where('movies_user.watched', '=', TRUE)
			->count();
	}

	public function to_watch($movie_id)
	{
		return (bool) $this
			->where('movies_user.movie_id', '=', $movie_id)
			->where('movies_user.to_watch', '=', TRUE)
			->count();
	}
}
