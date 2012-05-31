<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Model_Term extends Jam_Model
{
	public static function initialize(Jam_Meta $meta)
	{
		$meta
			->table('terms')
			->name_key('name');

		$meta->behaviors(array(												
			'nested' => Jam::behavior('Nested'),			
			'sluggable' => Jam::behavior('Sluggable', array('uses_primary_key' => FALSE, 'auto_save' => FALSE, 'unique' => TRUE))
		));
			
		$meta->associations(array(
			'vocabulary' => Jam::association('belongsto', array('inverse_of' => 'terms')),
			// 'synonyms' => Jam::association("manytomany", array(
			// 	'through' => array(
			// 		'model' => 'terms_synonyms',
			// 		'fields' => array(
			// 			'term_id',
			// 			'term_synonym_id'
			// 		)
			// 	),
			// 	'foreign' => 'term'
			// )),
		));
		
		$meta->fields(array(
			'id' => Jam::field('primary'),
			'name' => Jam::field('string'),								

			'is_hidden' => Jam::field('boolean', array()),  // whether to show / hide the term				
							
			// Analytics
			'created_at' => Jam::field('timestamp', array('auto_now_create' => TRUE, 'format' => 'Y-m-d H:i:s')),
			'updated_at' => Jam::field('timestamp', array('auto_now_update' => TRUE, 'format' => 'Y-m-d H:i:s')),
		));
	}		
}