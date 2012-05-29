<?php defined('SYSPATH') OR die('No direct script access.');

Kohana::modules(Kohana::modules() + array(
	'unittest'   => MODPATH.'core/unittest',   // Unit testing,
	'jamaker' => MODPATH.'openbuildings/jamaker', // Nifty tool for building and creating Jam objects
	'functest' => MODPATH.'openbuildings/functest', // Powerful tool for testing with different drivers - native, selenium, phantomjs
));
