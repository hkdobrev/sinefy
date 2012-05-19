<?php defined('SYSPATH') OR die('No direct script access.');

$assets = Assets::factory('body')
	->js('libs/bootstrap/bootstrap.min.js')
	->js('plugins.js')
	->js_block("jQuery('#trailer').modal({show: false});")
	->js('libs/jquery.masonry.min.js')
	->js('script.js')
	->js('sidebar.js');

	if ($ga_key = Kohana::$config->load('analytics.google.key'))
	{
		$assets->js_block("
			var _gaq=[['_setAccount','".$ga_key."'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));"
		);
	}

$assets = $assets->render();

	if ($fb_key = Kohana::$config->load('facebook.app_id'))
	{

		$assets .= 
		'<div id="fb-root" data-app="'.Kohana::$config->load('facebook.app_id').'"></div>'.
		(Assets::factory('facebook')->js('facebook.js')->render());
	}

echo $assets;
