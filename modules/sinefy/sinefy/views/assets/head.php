<?php defined('SYSPATH') OR die('No direct script access.');

$assets =	Assets::factory('head')
	->css('bootstrap.min.css')
	->css('bootstrap-responsive.min.css')
	->css('style.css')
	->js('libs/modernizr-2.5.3-respond-1.1.0.min.js')
	->css('http://code.jquery.com/ui/1.8.20/themes/base/jquery-ui.css')
	->css('http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css');

if (Kohana::$environment === Kohana::PRODUCTION AND $ga = Kohana::$config->load('analytics.google.key'))
{
	$assets->js_block(
		"var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '".$ga."']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	");
}

echo $assets->render();

