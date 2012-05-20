<?php defined('SYSPATH') OR die('No direct script access.');

echo Assets::factory('head')
	->css('bootstrap.min.css')
	->css('bootstrap-responsive.min.css')
	->css('style.css')
	->js('libs/modernizr-2.5.3-respond-1.1.0.min.js')
	->css('http://code.jquery.com/ui/1.8.20/themes/base/jquery-ui.css')
	->css('http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css')
	->render();
