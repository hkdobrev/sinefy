<?php defined('SYSPATH') OR die('No direct script access.');

$fb_app_id = '';
$fb_app_secret = '';

switch (Kohana::$environment)
{
	case Kohana::DEVELOPMENT:
		$fb_app_id = '295857830509277';
		$fb_app_secret = '7aa179f5677b6b66d51ed87d10d9c568';
	break;
	case Kohana::TESTING:
		
	break;
	case Kohana::STAGING:
		$fb_app_id = '';
		$fb_app_secret = '';
	break;
	case Kohana::PRODUCTION:
		$fb_app_id = '144726088994575';
		$fb_app_secret = 'df05d63d0b12cb642233a3e4995bd5c9';
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
			'namespace' => 'sinefy',
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
	)
);
