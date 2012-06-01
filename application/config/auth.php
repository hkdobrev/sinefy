<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'driver'       => 'jam',
	'hash_method'  => 'sha256',
	'hash_key'     => 'WhM5%d5&7arJ44s6Dg',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'sinefy_auth',

	'services' => array(
		'facebook' => array(
			'enabled' => TRUE,
			'auto_login' => TRUE,
			'create_user' => TRUE,
			// 'back_url' => '/',
			'auth' => Arr::get(array(
				Kohana::PRODUCTION => array(
					'appId' => '144726088994575',
					'secret' => 'df05d63d0b12cb642233a3e4995bd5c9'
				),
				Kohana::STAGING => array(
					'appId' => '438826606127748',
					'secret' => 'f71eb6764e5ec34305cde73a4a08d580'
				),
				Kohana::TESTING => array(
					'appId' => '419273394771509',
					'secret' => 'cea0bfa0f987205f899c8ffb3370a449'
				),
				Kohana::DEVELOPMENT => array(
					'appId' => '295857830509277',
					'secret' => '7aa179f5677b6b66d51ed87d10d9c568'
				),
			), Kohana::$environment)
		),
		'twitter' => array(
			'enabled' => FALSE,
			// 'back_url' => '/',
			'auth' => array(
				'consumer_key' => 'YOUR_CONSUMER_KEY',
				'consumer_secret' => 'YOUR_CONSUMER_SECRET',
			),
			'create_user' => FALSE,
		),
		
		// 'foursqaure' => array(
		// 	'enabled' => FALSE,
		// 	// 'back_url' => '/',
		// 	'auth' => array(
		// 		'consumer_key' => 'YOUR_CONSUMER_KEY',
		// 		'consumer_secret' => 'YOUR_CONSUMER_SECRET',
		// 	),
		// 	'create_user' => FALSE,
		// )
	),
);
