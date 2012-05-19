<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Layout {

	public function action_index()
	{
		$user_movies = ORM::factory('user', 1)->movies->where('movie.id', '=', 2)->wishlist();
		echo "<pre>"; var_dump($user_movies); die;
	}

} 
