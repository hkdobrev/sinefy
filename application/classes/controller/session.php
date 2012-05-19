<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Session extends Controller_Layout {

	public function action_new()
	{
		$this->view = FALSE;
		$user = Auth::instance()->get_user();
		$this->response->body(json_encode(array('ok' => TRUE)));
	}

	public function action_delete()
	{
		Auth::instance()->logout();
		$this->request->redirect();
	}
}
