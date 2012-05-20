<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Layout {

	public function action_index()
	{
		if ($this->current_user AND $this->current_user->loaded())
		{
			$pagination = Pagination::factory(array(
				'total_items' => ORM::factory('movies_user')
					->where('movies_user.user_id', '=', $this->current_user->pk())
					->count_all()
			));

			if ($pagination->current_page > $pagination->total_pages) 
			{
				$this->view = false;
			}
			else 
			{
				$this->view_data = array(
					'movies_users' => ORM::factory('movies_user')
						->where('movies_user.user_id', '=', $this->current_user->pk())
						->with('movie')
						->limit($pagination->items_per_page)
						->offset($pagination->offset)
						->order_by('movies_user.ranking'),
					'friends' => array()/*Auth::instance()->facebook()->api('/me/friends')*/,
					'pagination' => $pagination->render()
				);
			}
		}
	}

} 
