<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Session extends Controller_Layout {

	public function action_new()
	{
		$this->auto_render = NULL;
		$user = Auth::instance()->get_user();
		$this->response->body(json_encode(array('id' => $user->pk())));
	}

	public function action_delete()
	{
		Auth::instance()->logout();
	}
}
