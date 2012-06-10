<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'key' => 'id',
	'driver' => 'jam', // available drivers: orm, jam
	'type' => 'multiple', // multiple or singular
	'format' => 'html', // set to FALSE if you don't want different formats included in the routes
	'formats' => array(
		'html',
		'json',
		'jsonp',
		'js',
		'xml',
		'rss'
	),
	'common_actions' => array(
		'object' => array(
			'edit',
			'delete'
		),
		'collection' => array(
			'new'
		)
	),
	'default_actions' => array(
		'object' => 'show',
		'collection' => 'index'
	),
	'positive_integer_regex' => '[1-9][0-9]*',
	'slug_regex' => '(?:[a-z-0-9]*?-)?[1-9][0-9]*'
);
