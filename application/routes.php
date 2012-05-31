<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

/**
 * Shortcuts for login/logout/signup
 */
Route::set('login', 'login')
	->defaults(array(
		'controller' => 'session',
		'action' => 'new'
	));

Route::set('logout', 'logout')
	->defaults(array(
		'controller' => 'session',
		'action' => 'delete'
	));

Route::set('home', '(<page>)', array(
	'page' => '[1-9][0-9]*'
))
	->defaults(array(
		'controller' => 'home',
		'action' => 'index',
		'page'		 =>	'1'
	));

Route::set('watched', 'movie/watched')
	->defaults(array(
		'controller' => 'movie',
		'action' => 'watched'
	));

Route::set('to_watch', 'movie/to_watch')
	->defaults(array(
		'controller' => 'movie',
		'action' => 'to_watch'
	));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index'
	));
