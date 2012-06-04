<?php defined('SYSPATH') OR die('No direct script access.');

class Service_Facebook extends Kohana_Service_Facebook {

	public function fql($query, $multi = FALSE)
	{
		return $this->api(array(
			'method' => 'fql.'.($multi ? 'multi' : '').'query',
			'query' => $query
		));
	}
}
