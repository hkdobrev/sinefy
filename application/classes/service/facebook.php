<?php defined('SYSPATH') OR die('No direct script access.');

class Service_Facebook extends Kohana_Service_Facebook {

	public function fql($query, $multi = FALSE)
	{
		$query_key = $multi ? 'queries' : 'query';

		return $this->api(array(
			'method' => 'fql.'.($multi ? 'multi' : '').'query',
			$query_key => $query
		));
	}

	public function body()
	{
		$options = json_encode(Arr::merge(array('appId' => Arr::path($this->_config, 'auth.appId')), Arr::get($this->_config, 'jssdk', array())));

		return <<<BODY
			<div id="fb-root"></div>
			<script>
				window.fbAsyncInit = function() {FB.init($options);window.afterFBInit();};
				(function(d){
					var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
					if (d.getElementById(id)) {return;}
					js = d.createElement('script'); js.id = id; js.async = true;
					js.src = "//connect.facebook.net/en_US/all.js";
					ref.parentNode.insertBefore(js, ref);
				}(document));
			</script>
BODY;
	}
}
