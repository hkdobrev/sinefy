<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Movie extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		$meta->name_key('name');

		$meta->behaviors(array(
			'paranoid'
		));

		$meta->associations(array(
			'users' => Jelly::association('manytomany'),
			'studio' => Jelly::association('belongsto'),
		));

		$meta->fields(array(
			'id' => Jelly::field('primary'),
			'name' => Jelly::field('string', array(
				'rules' => array(
					array('not_empty'),
				),
				'filters' => array(
					array('trim')
				)
			)),
			'about' => Jelly::field('description'),
			'release_date' => Jelly::field('timestamp', array('format' => 'Y-m-d')),
			'facebook_likes' => Jelly::field('integer'),

			'facebook' => Jelly::field('facebook', array('unique' => TRUE)),
			'youtube' => Jelly::field('youtube'),
			'imdb' => Jelly::field('imdb_movie'),

			'created_at' => Jelly::field('timestamp', array('format' => 'Y-m-d H:i:s', 'auto_now_create' => TRUE)),
			'updated_at' => Jelly::field('timestamp', array('format' => 'Y-m-d H:i:s', 'auto_now_update' => TRUE)),
		));
	}

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

	public function load_fb_data($data)
	{
		$this->set(array(
			''
		))->save();
	}
}
