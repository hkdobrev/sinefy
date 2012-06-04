<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Movie extends Controller_Layout {

	public $view = FALSE;

	public function action_watched()
	{
		$movies_user = $this->_movies_user();

		if ($movies_user->loaded())
		{
			$movies_user->watched = ! (bool) $movies_user->watched;
			$movies_user->save();
		}
		die;
	}
	
	public function action_to_watch()
	{
		$movies_user = $this->_movies_user();

		if ($movies_user->loaded())
		{
			$movies_user->to_watch = ! (bool) $movies_user->to_watch;
			$movies_user->save();
		}
		die;
	}

	protected function _movies_user()
	{
		return Jam::query('movies_user')
			->where('movie_id', '=', $this->request->post('movie'))
			->where('user_id', '=', $this->current_user->id())
			->find();
	}

}
