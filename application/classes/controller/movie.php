<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Movie extends Controller_Layout {

	public $view = FALSE;

	public function action_watched()
	{
		$movies_user = ORM::factory('movies_user', array(
			'movie_id' => $this->request->post('movie'),
			'user_id' => $this->current_user->pk()
		));

		if ($movies_user->loaded())
		{
			$movies_user->watched = (int) ( ! $movies_user->watched);
			$movies_user->save();
		}
		die;
	}
	
	public function action_to_watch()
	{
		$movies_user = ORM::factory('movies_user', array(
			'movie_id' => $this->request->post('movie'),
			'user_id' => $this->current_user->pk()
		));

		if ($movies_user->loaded())
		{
			$movies_user->wishlist = (int) ( ! $movies_user->wishlist);
			$movies_user->save();
		}
		die;
	}

}
