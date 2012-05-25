<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Kohana module wrapping the Foursquare SDK.
 * 
 * Provides a wrapper for making both public and authenticated requests to the
 * Foursquare API, as well as the necessary functionality for acquiring an
 * access token for a user via Foursquare web authentication
 * 
 * @package Foursquare
 * @author Haralan Dobrev
 * @copyright Sinefy 2012
 * @version 1.0.0
 * @license MIT
 */
class Kohana_Foursquare {

	/**
	 * The base url for the foursquare API
	 */
	const BASE_URL = "https://api.foursquare.com/";

	/**
	 * The url for obtaining the auth access code
	 */
	const AUTH_URL = "https://foursquare.com/oauth2/authenticate";

	/**
	 * The url for obtaining an auth token
	 */
	const TOKEN_URL = "https://foursquare.com/oauth2/access_token";

	/**
	 *  @var string $_auth_token
	 */
	protected $_auth_token;

	/**
	 * [$_base_url description]
	 * @var [type]
	 */
	protected $_base_url;

	public static $endpoints = array(
		'venues' => array(),
		'users'
	);

	public static function factory($config = array())
	{
		return new Foursquare($config);
	}

	/**
	 * Constructor for the API
	 */
	public function __construct($config = array())
	{
		$this->_config = Arr::merge(Kohana::$config->load('foursquare'), $config);
		$this->_base_url = Foursquare::BASE_URL.$this->config('version');
	}

	public function config($key = NULL, $value = NULL)
	{
		if ($key === NULL)
			return $this->_config;

		if ($value === NULL)
			Arr::path($this->_config, $key);

		Arr::set_path($this->_config, $key, $value);
		return $this;
	}

	// Request functions

	/**
	 * GetPublic
	 * Performs a request for a public resource
	 * @param string $endpoint A particular endpoint of the Foursquare API
	 * @param Array $params A set of parameters to be appended to the request, defaults to FALSE (none)
	 */
	public function GetPublic($endpoint, $params = FALSE)
	{
		// Build the endpoint URL
		$url = $this->_base_url . trim($endpoint, "/");
		// Append the client details
		$params['client_id'] = $this->_client_id;
		$params['client_secret'] = $this->_client_secret;
		$params['v'] = $this->_version;
		// Return the result;
		return $this->GET($url, $params);
	}

	/**
	 * GetPrivate
	 * Performs a request for a private resource
	 * @param string $endpoint A particular endpoint of the Foursquare API
	 * @param Array $params A set of parameters to be appended to the request, defaults to FALSE (none)
	 * @param bool $POST whether or not to use a POST request
	 */
	public function GetPrivate($endpoint, $params = FALSE, $POST = FALSE)
	{
		$url = $this->_base_url . trim($endpoint, "/");
		$params['oauth_token'] = $this->_auth_token;
		$params['v'] = $this->_version;
		if (!$POST)
			return $this->GET($url, $params);
		else
			return $this->POST($url, $params);
	}

	public function getResponseFromJsonstring($json)
	{
		$json = json_decode($json);
		if (!isset($json->response))
		{
			throw new FoursquareApiException('Invalid response');
		}

		// Better to check status code and fail gracefully, but not worried about it
		// ... REALLY, we should be checking the HTTP status code as well, not
		// just what the API gives us in it's microformat
		/*
		  if ( !isset( $json->meta->code ) || 200 !== $json->meta->code ) {
		  throw new FoursquareApiException( 'Invalid response' );
		  }
		 */
		return $json->response;
	}

	/**
	 * Request
	 * Performs a cUrl request with the the currently set $_request_url and $_params.
	 * The useragent of the request is hardcoded as the Google Chrome Browser agent
	 * @param Request::GET|Request::POST $type specify whether the request should be executed as a POST or GET
	 * @return $this
	 */
	protected function _request($type = Request::GET)
	{
		$this->_request = Request::factory($this->_request_url);

		if ( ! $this->_request_url)
			throw new Foursquare_Exception('You must have a request url set to perform a request!');

		$this->_params = (array) $this->_params;

		$this->_params['v'] = $this->config('version_date');

		if($type === Request::GET)
		{
			$this->_request->query($params);
		}
		elseif ($type === Request::POST)
		{
			$this->_request->post($params);
		}

		$this->_request->options(array(
			CURLOPT_TIMEOUT => 30,
			CURLOPT_SSL_VERIFYPEER => FALSE
		));
		if (isset($_SERVER['HTTP_USER_AGENT']))
		{
			$this->_request->options(CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		}
		else
		{
			// Handle the useragent like we are Google Chrome
			$this->_request->options(CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.X.Y.Z Safari/525.13.');
		}

		return $this;
	}

	protected function _execute()
	{
		if ( ! $this->_request instanceof Request)
			throw new Foursquare_Exception('You should have a built request to execute!');

		$this->_response = $this->_request->execute()->response;
	}


	// Helper Functions

	/**
	 * GeoLocate
	 * Leverages the google maps api to generate a lat/lng pair for a given address
	 * packaged with FoursquareApi to facilitate locality searches.
	 * @param string $addr An address string accepted by the google maps api
	 * @return array(lat, lng) || NULL
	 */
	public function GeoLocate($addr)
	{
		$geoapi = "http://maps.googleapis.com/maps/api/geocode/json";
		$params = array("address" => $addr, "sensor" => "FALSE");
		$response = $this->GET($geoapi, $params);
		$json = json_decode($response);
		if ($json->status === "ZERO_RESULTS")
		{
			return NULL;
		}
		else
		{
			return array($json->results[0]->geometry->location->lat, $json->results[0]->geometry->location->lng);
		}
	}
	
	 public function GeoPosition($addr)
	{
		$geoapi = "http://maps.googleapis.com/maps/api/geocode/json";
		$params = array("latlng " => $addr, "sensor" => "FALSE");
		$response = $this->GET($geoapi, $params);
		$json = json_decode($response);
		if ($json->status === "ZERO_RESULTS")
		{
			return NULL;
		}
		else
		{
			return array($json->results[0]->geometry->location->lat, $json->results[0]->geometry->location->lng);
		}
	}

	/**
	 * MakeUrl
	 * Takes a base url and an array of parameters and sanitizes the data, then creates a complete
	 * url with each parameter as a GET parameter in the URL
	 * @param string $url The base URL to append the query string to (without any query data)
	 * @param Array $params The parameters to pass to the URL
	 */
	protected function MakeUrl($url, $params)
	{
		if (!empty($params) && $params)
		{
			foreach ($params as $k => $v)
				$kv[] = "$k=$v";
			$url_params = str_replace(" ", "+", implode('&', $kv));
			$url = trim($url) . '?' . $url_params;
		}
		return $url;
	}

		// Access token functions

	/**
	 * SetAccessToken
	 * Basic setter function, provides an authentication token to GetPrivate requests
	 * @param string $token A Foursquare user auth_token
	 */
	public function SetAccessToken($token)
	{
		$this->_auth_token = $token;
	}

	/**
	 * AuthenticationLink
	 * Returns a link to the Foursquare web authentication page.
	 * @param string $redirect The configured redirect_uri for the provided client credentials
	 */
	public function AuthenticationLink($redirect = '')
	{
		if (0 === strlen($redirect))
		{
			$redirect = $this->_redirect_uri;
		}
		$params = array("client_id" => $this->_client_id, "response_type" => "code", "redirect_uri" => $redirect);
		return $this->MakeUrl($this->_auth_url, $params);
	}

	/**
	 * GetToken
	 * Performs a request to Foursquare for a user token, and returns the token, while also storing it
	 * locally for use in private requests
	 * @param $code The 'code' parameter provided by the Foursquare webauth callback redirect
	 * @param $redirect The configured redirect_uri for the provided client credentials
	 */
	public function GetToken($code, $redirect = '')
	{
		if (0 === strlen($redirect))
		{
			// If we have to use the same URI to request a token as we did for
			// the authorization link, why are we not storing it internally?
			$redirect = $this->_redirect_uri;
		}
		$params = array("client_id" => $this->_client_id,
			"client_secret" => $this->_client_secret,
			"grant_type" => "authorization_code",
			"redirect_uri" => $redirect,
			"code" => $code);
		$result = $this->GET($this->_token_url, $params);
		$json = json_decode($result);

		// Petr Babicka Check if we get token
		if (property_exists($json, 'access_token'))
		{
			$this->SetAccessToken($json->access_token);
			return $json->access_token;
		}
		else
		{
			return 0;
		}
	}
}
