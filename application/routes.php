<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */


Route::set('home', '(<page>)', array(
	'page' => '[1-9][0-9]*'
))
	->defaults(array(
		'controller' => 'home',
		'action' => 'index',
		'page'		 =>	'1'
	));

Route::set('logout', 'logout')
	->defaults(array(
		'controller' => 'session',
		'action' => 'destroy'
	));

Resource::set('session', array(
	'only' => array(
		// 'new',
		// 'create',
		'destroy'
	),
	'with' => 'facebook',
	'model' => FALSE,
	'singular' => TRUE
));

Resource::set('users', array(
	'only' => array(
		'new',
		'create',
		'show'
	),
	'movies' => array(
		'only' => array(
			'index',
			'show'
		)
	)
));

Resource::set('me', array(
	'singular' => TRUE,
	'model' => 'user',
	'only' => array(
		'edit',
		'update',
		'destroy'
	),
	'movies' => array(
		'only' => array(
			'new',
			'create',
			'edit',
			'update',
			'destroy',
		)
	)
));

Resource::set('movies', array(
	'only' => array(
		'index',
		'show',
	),
	'comments' => array(
		'index',
		'new',
		'create',
		'destroy'
	)
));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index'
	));
