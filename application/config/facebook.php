<?php defined('SYSPATH') OR die('No direct script access.');

$app_id = '';
$app_secret = '';

switch (Kohana::$environment)
{
	case Kohana::DEVELOPMENT:
		$app_id = '295857830509277';
		$app_secret = '7aa179f5677b6b66d51ed87d10d9c568';
	break;
	case Kohana::TESTING:
		
	break;
	case Kohana::STAGING:
		$app_id = '';
		$app_secret = '';
	break;
	case Kohana::PRODUCTION:
		$app_id = '144726088994575';
		$app_secret = 'df05d63d0b12cb642233a3e4995bd5c9';
	break;
}

return array(

	'app_id' => $app_id,
	'app_secret' => $app_secret,
	'scope' => 'email,user_likes,friends_likes'

);
