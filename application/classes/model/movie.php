<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Movie extends Jam_Model {

	public static function initialize(Jam_Meta $meta)
	{
		$meta->name_key('name');

		$meta->behaviors(array(
			'paranoid' => Jam::behavior('paranoid')
		));

		$meta->associations(array(
			'users' => Jam::association('manytomany'),
			'studio' => Jam::association('belongsto'),
		));

		$meta->fields(array(
			'id' => Jam::field('primary'),
			'name' => Jam::field('string', array(
				'rules' => array(
					array('not_empty'),
				),
				'filters' => array(
					array('trim')
				)
			)),
			'about' => Jam::field('description'),
			'release_date' => Jam::field('timestamp', array('format' => 'Y-m-d')),
			'facebook_likes' => Jam::field('integer'),

			'facebook' => Jam::field('facebook', array('unique' => TRUE)),
			'youtube' => Jam::field('youtube'),
			'imdb' => Jam::field('imdb_movie'),

			'created_at' => Jam::field('timestamp', array('format' => 'Y-m-d H:i:s', 'auto_now_create' => TRUE)),
			'updated_at' => Jam::field('timestamp', array('format' => 'Y-m-d H:i:s', 'auto_now_update' => TRUE)),
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
