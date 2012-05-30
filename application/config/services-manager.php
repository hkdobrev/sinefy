<?php defined('SYSPATH') OR die('No direct script access.');

$fb_app_id = '';
$fb_app_secret = '';
$fb_namespace = '';

switch (Kohana::$environment)
{
	case Kohana::DEVELOPMENT:
		$fb_app_id = '295857830509277';
		$fb_app_secret = '7aa179f5677b6b66d51ed87d10d9c568';
		$fb_namespace = 'sinefydev';
	break;
	case Kohana::TESTING:
		$fb_app_id = '419273394771509';
		$fb_app_secret = 'cea0bfa0f987205f899c8ffb3370a449';
		$fb_namespace = 'sinefytest';
	break;
	case Kohana::STAGING:
		$fb_app_id = '438826606127748';
		$fb_app_secret = 'f71eb6764e5ec34305cde73a4a08d580';
		$fb_namespace = 'sinefystaging';
	break;
	case Kohana::PRODUCTION:
		$fb_app_id = '144726088994575';
		$fb_app_secret = 'df05d63d0b12cb642233a3e4995bd5c9';
		$fb_namespace = 'sinefyapp';
	break;
}

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
			'auth' => array(
				'appId' => $fb_app_id,
				'secret' => $fb_app_secret,
			),
			'namespace' => $fb_namespace,
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
			'server' => '127.0.0.1',
		),

		'googleanalytics' => array(
			'api-key' => 'UA-32162192-1',
			'enabled' => Kohana::$environment === Kohana::PRODUCTION,
			'header' => TRUE
		),
	)
);
