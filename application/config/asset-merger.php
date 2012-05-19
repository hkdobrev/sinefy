<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'merge'      => array(Kohana::PRODUCTION, Kohana::STAGING),
	'folder'     => 'assets',
	'load_paths' => array(
		Assets::JAVASCRIPT => APPPATH.'js'.DIRECTORY_SEPARATOR,
		Assets::STYLESHEET => APPPATH.'css'.DIRECTORY_SEPARATOR,
	),
	'processor'  => array(
		Assets::STYLESHEET => 'cssmin',
		Assets::JAVASCRIPT => 'jsmin',
	),
);
