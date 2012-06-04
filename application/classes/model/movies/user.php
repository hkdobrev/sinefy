<?php defined('SYSPATH') or die('No direct access allowed!'); 

class Model_Movies_User extends Jam_Model {

	public static function initialize(Jam_Meta $meta)
	{
		$meta->associations(array(
			'movie' => Jam::association('belongsto'),
			'user' => Jam::association('belongsto')
		));

		$meta->fields(array(
			'id' => Jam::field('primary'),
			'watched' => Jam::field('boolean'),
			'to_watch' => Jam::field('boolean'),
			'ranking' => Jam::field('integer')
		));
	}

}
