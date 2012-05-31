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

			if (!$pagination->next_page)
			{
				$this->view = false;
			}
			else
			{
				$friends = Arr::get(Auth::instance()->facebook()->api('/me/friends', array('limit' => 5000)), 'data', array());
				$this->view_data = array(
					'movies_users' => ORM::factory('movies_user')
							->where('movies_user.user_id', '=', $this->current_user->pk())
							->with('movie')
							->limit($pagination->items_per_page)
							->offset($pagination->offset)
							->order_by('movies_user.ranking'),
					'friends' => $friends,
					'friends_count' => count($friends),
					'pagination' => $pagination->render()
				);
			}
		}
	}

	public function action_ajax_friends()
	{
		$friends = Arr::get(Auth::instance()->facebook()->api('/me/friends', array('limit' => 50)), 'data', array());
		shuffle($friends);
		$this->view_data['friends'] = array_splice($friends, 0, 20);
	}

}

