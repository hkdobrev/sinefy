<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'services' => array(
		
		'mailchimp' => array(
			'enabled' => TRUE,
			'api-key' => '6e2d4da9a2ed418f76a86480d870485d-us5',
			'lists' => array(
				'users' => '8ec51435e6'
			)
		),
		
		'facebook' => array(
			'enabled' => TRUE,
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
			), Kohana::$environment),
			'namespace' => Arr::get(array(
				Kohana::PRODUCTION => array(
					'namespace' => 'sinefyapp',
				),
				Kohana::STAGING => array(
					'namespace' => 'sinefystaging',
				),
				Kohana::TESTING => array(
					'namespace' => 'sinefytest',
				),
				Kohana::DEVELOPMENT => array(
					'namespace' => 'sinefydev',
				),
			), Kohana::$environment),
			'scope' => 'email,user_likes,friends_likes',
			'og_enabled' => FALSE,
			'jssdk' => array(
				'status' => TRUE,
				'cookie' => TRUE,
				'xfbml' => TRUE
			)
		),

		'beanstalkd' => array(
			'enabled' => TRUE,
			'server' => '0.0.0.0',
		),

		'googleanalytics' => array(
			'api-key' => 'UA-32162192-1',
			'enabled' => Kohana::$environment === Kohana::PRODUCTION,
			'header' => TRUE
		),
	)
);
