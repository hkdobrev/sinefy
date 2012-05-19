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
		
		
		
		$this->current_user = Auth::instance()->get_user();

		View::set_global('current_user', $this->current_user);
		
		// permissions
		

	}

	public function after()
	{
		$view = View::factory($this->view, (array) $this->view_data);
		if ($this->request->is_initial() AND ! $this->request->is_ajax())
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
		}
		else
		{
			$this->auto_render = FALSE;
			$this->response->body($view);
		}
		parent::after();
	}

}
