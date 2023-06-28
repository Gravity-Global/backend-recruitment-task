<?php
class Controller_Users extends Controller
{

	function __construct()
	{
		$this->model = new Model_Users();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = json_decode($this->model->get_data(), true);	
		$this->view->generate('users_view.tpl', 'template_view.tpl', $data);
	}
}