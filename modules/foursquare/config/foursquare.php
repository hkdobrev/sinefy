<?php defined('SYSPATH') OR die('No direct script access.');

$client_id = '';
$client_secret = '';

switch (Kohana::$environment)
{
	case Kohana::DEVELOPMENT:
		$client_id = 'S0IEIYF1X4NU1SZH1OR3KWSZAS5BQU3US2YKJFPEHSWTIKAP';
		$client_secret = 'K2MOMPIW4O4SXKRA34PSD3SYUQCVL4HLCRGUCKWGYHXK01GK';
	break;
	case Kohana::TESTING:
		
	break;
	case Kohana::STAGING:
		$client_id = '';
		$client_secret = '';
	break;
	case Kohana::PRODUCTION:
		$$client_id = 'W2MXLYLR0YK514IIR2ELMK10TJJWEFRIOYOI4J5F53LZYURV';
		$client_secret = 'K2MOMPIW4O4SXKRA34PSD3SYUQCVL4HLCRGUCKWGYHXK01GK';
	break;
}

return array(
	'version' => 'v2',
	'version_date' => '20120228',
	'client_id' => $client_id,
	'client_secret' => $client_secret,
	'callback_url' => URL::site('foursquare/callback')
);
