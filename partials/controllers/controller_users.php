<?php
class Controller_Users extends Controller
{

	public $users;
	function __construct()
	{		
		$this->model = new Model_Users();
		$this->view = new View();
		$this->users = json_decode($this->model->get_data(), true);
	}
	
	function action_index()
	{
		$this->view->generate('users_view.tpl', 'template_view.tpl', $this->users);
	}

	function action_add_user()
	{

	}
	function action_delete_user()
	{
		if(!empty($_POST['id'])){
			$user = $this->users[$_POST['id']];
			unset($this->users[$_POST['id']]);

			$save = $this->model->save($this->users);

			echo json_encode(array(
				'result'=>'good',
				'html'=>'User '.$user['name']. ' deleted'
			));
			return;
		}
		else{
			echo json_encode(array(
				'result'=>'error',
				'html'=>'ERROR User '.$user['name']. ' not deleted'
			));
			return;
		}
	}
}