<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Builder_Movie extends Jam_Builder {

	public function filter(Model_User $user)
	{
		
	}

	public function watched()
	{
		return $this->where('movies_user.watched', '=', TRUE);
	}

	public function to_watch()
	{
		return $this->where('movies_user.to_watch', '=', TRUE);
	}

}
