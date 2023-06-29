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
		$ids = array_column($this->users, 'id');
		$_POST['id'] = max($ids)+1;
		array_push($this->users, $_POST);

		$save = $this->model->save($this->users);
		// echo json_encode(array(
		// 	'date'=>$_POST
		// ));

		header('Location: '.'/users');
		$this->view->generate('users_view.tpl', 'template_view.tpl', $this->users);
	}
	function action_delete_user()
	{
		if($_POST['id']!=''){
			$user_del = '';
			foreach($this->users AS $key => $user){
				if($_POST['id'] == $user['id'] ){
					$user_del = $this->users[$key];
					unset($this->users[$key]);
					break;
				}
			}
			$save = $this->model->save($this->users);

			echo json_encode(array(
				'result'=>'good',
				'html'=>'User '.$user_del['name']. ' deleted'
			));
			return;
		}
		else{
			echo json_encode(array(
				'result'=>'error',
				'html'=>'ERROR User '.$_POST['id'].$user_del['name']. ' not deleted'
			));
			return;
		}
	}
}