<?php defined('SYSPATH') OR die('No direct script access.');

Kohana::modules(Kohana::modules() + array(
	'asset-merger' => MODPATH.'asset-merger', // Merging assets and stuff
	'userguide'  => MODPATH.'userguide',  // User guide and API documentation
));
