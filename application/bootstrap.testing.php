<?php defined('SYSPATH') OR die('No direct script access.');

Kohana::modules(Kohana::modules() + array(
	'unittest'   => MODPATH.'unittest',   // Unit testing
));
