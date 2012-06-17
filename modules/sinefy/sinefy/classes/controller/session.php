<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Session extends Controller_Layout {

	public function action_new()
	{
		$this->view = FALSE;
		$user = Auth::instance()->get_user();
	}

	public function action_facebook()
	{
		$this->view = FALSE;
		$user = Auth::instance()->get_user();
	}

	public function action_destroy()
	{
		$this->view = FALSE;
		Auth::instance()->logout();
	}
}
