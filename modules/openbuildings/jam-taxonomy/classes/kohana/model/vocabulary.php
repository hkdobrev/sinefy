<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Model_Vocabulary extends Jam_Model
{
	public static function initialize(Jam_Meta $meta)
	{
		$meta
			->table('vocabularies')
			->name_key('name');

		$meta->behaviors(array(												
			'paranoid' => Jam::behavior('paranoid', array()),
		));

		$meta->associations(array(
			'terms' => Jam::association('hasmany', array('inverse_of' => 'vocabulary')),
		));

		$meta->fields(array(
			'id' => Jam::field('primary'),
			'name' => Jam::field('string'),
			
			// whether to show / hide the whole vocabulary from the frontend			
			'is_hidden' => Jam::field('boolean', array()),  
							
			// Analitics
			'created_at' => Jam::field('timestamp', array('auto_now_create' => TRUE, 'format' => 'Y-m-d H:i:s')),
			'updated_at' => Jam::field('timestamp', array('auto_now_update' => TRUE, 'format' => 'Y-m-d H:i:s', 'label' => "Last edited")),
		));
	}
}