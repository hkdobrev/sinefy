<?php defined('SYSPATH') OR die('No direct script access.');

Kohana::modules(Kohana::modules() + array(
	'userguide'  => MODPATH.'userguide',  // User guide and API documentation
));
