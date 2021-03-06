<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
        $view = View::factory('index');
		$this->response->body($view);
	}
    public function action_login()
	{
        $view = View::factory('login');
		$this->response->body($view);
	}

    public function action_home()
	{
        $view = View::factory('home');
		$this->response->body($view);
	}
    
    public function action_volunteer()
	{
        $view = View::factory('volunteer');
		$this->response->body($view);
	}
    
    public function action_admin()
	{
        $view = View::factory('admin');
		$this->response->body($view);
	}
    
    public function action_places()
	{
        $view = View::factory('places');
		$this->response->body($view);
	}

} // End Welcome
