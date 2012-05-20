<?php defined('SYSPATH') OR die('No direct script access.');

class Sinefy {

	public static function watched($movie_id)
	{
		$check_watched = Auth::instance()->get_user()->movies->watched($movie_id);
		$attrs = array(
			'class' => 'btn watched-button'.($check_watched ? ' active' : ''),
			'value' => $movie_id
		);
		return Form::open(Route::url('watched'), array('class' => 'button-form'))
			.Form::button('movie', 'Watched',$attrs)
		.Form::close();
	}

	public static function to_watch($movie_id)
	{
		$check_to_watch = Auth::instance()->get_user()->movies->wishlist($movie_id);
		$attrs = array(
			'class' => 'btn to-watch-button'.($check_to_watch ? ' active' : ''),
			'value' => $movie_id
		);
		return Form::open(Route::url('to_watch'), array('class' => 'button-form'))
			.Form::button('movie', 'Watch',$attrs)
		.Form::close();
	}

	public static function actions($movie_id)
	{
		return Sinefy::watched($movie_id).Sinefy::to_watch($movie_id);
	}

}
