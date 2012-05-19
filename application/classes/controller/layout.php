<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Layout extends Controller_Template {

	public $template = 'layout';

	public $view;

	public $view_data = array();

	public $title_template = ':title - :site';

	public $title = ':controller';

	/**
	 * @var Model_User
	 */
	public $current_user = NULL;

	public function before()
	{
		parent::before();

		$this->view = $this->request->controller().'/'.$this->request->action();

		// login
		if ($this->request->controller() !== 'session')
		{
			$this->current_user = Auth::instance()->get_user();
		}

		View::set_global('current_user', $this->current_user);
		
		// permissions
	}

	public function after()
	{
		if ($this->view)
		{
			$view = View::factory($this->view, (array) $this->view_data);
		}
		else
		{
			$view = '';
		}
		if ($this->auto_render !== FALSE AND $this->request->is_initial() AND ! $this->request->is_ajax())
		{
			$this->template->content = $view;
			$this->template->title = str_replace(array(
				':title - ',
				':controller',
				':action',
				':site'
			), array(
				$this->title !== FALSE ? Inflector::humanize($this->title).' - ' : '',
				Inflector::humanize($this->request->controller()),
				Inflector::humanize($this->request->action()),
				Kohana::$config->load('app.title')
			), $this->title_template);
			$this->template->header = View::factory('header');
		}
		elseif($this->auto_render !== NULL)
		{
			$this->auto_render = FALSE;
			$this->response->body($view);
		}
		parent::after();
	}

}
