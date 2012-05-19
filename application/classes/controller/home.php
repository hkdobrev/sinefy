<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Layout {

	public function action_index()
	{
		if ($this->current_user AND $this->current_user->loaded())
		{
			$this->view_data = array(
				'movies_users' => ORM::factory('movies_user')
					->where('movies_user.user_id', '=', $this->current_user->pk())
					->with('movie')
					->order_by('movies_user.ranking'),
				'friends' => Auth::instance()->facebook()->api('/me/friends')
			);
		}
	}

} 
