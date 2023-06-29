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


		$errors = array();

		//* name                            
		//* username
		//* email
		//* phone
		// website

		//* company_name
		// company_catchPhrase
		// company_bs

		//* address_street
		//* address_suite
		//* address_city
		// address_zipcode
		// address_geo_lat
		// address_geo_lng

        if (!preg_match("/^\s*[a-zA-Z][a-zA-Z\s]*$/", $_POST['name'])) {
            $errors['name'] = "Invalid  name";
        }
		if (!preg_match("/^\s*[a-zA-Z][a-zA-Z\s]*$/", $_POST['username'])) {
            $errors['username'] = "Invalid  username";
        }

        if (!htmlspecialchars($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email";
        }

        if ($this->emailExists($_POST['email'])) {
            $errors['email'] = "Email is already taken";
        }
		if (!preg_match("/^\+48\s\d{3}\s\d{3}\s\d{3}$/", $_POST['phone'])) {
            $errors['phone'] = "Invalid phone +48 xxx xxx xxx";
        }

		if (!preg_match("/^\s*[a-zA-Z][a-zA-Z\s]*$/", $_POST['company']['name'])) {
            $errors['company_name'] = "Invalid company name";
        }

        if (!preg_match("/^[a-zA-Z0-9\. ]*$/", $_POST['address']['street'])) {
            $errors['address_street'] = "Invalid street";
        }

        if (!preg_match("/^[a-zA-Z ]*$/", $_POST['address']['suite'])) {
            $errors['address_suite'] = "Invalid suite";
        }

		if (!preg_match("/^\s*[a-zA-Z][a-zA-Z\s]*$/", $_POST['address']['city'])) {
            $errors['address_city'] = "Invalid city";
        }

        // if (!preg_match("/^\d{5}(-\d{4})?$/", $_POST['address']['zipcode'])) {
        //     $errors['address_zipcode'] = "Invalid zip code";
        // }

        if (isset($errors) && !empty($errors)) {
			echo json_encode(array(
				'result'=>'validate',
				'data' => $errors,
				'html'=>'User validate'
			));
            return;
        }

		$ids = array_column($this->users, 'id');
		$_POST['id'] = max($ids)+1;
		array_push($this->users, $_POST);

		if($save = $this->model->save($this->users)){
			echo json_encode(array(
				'result'=>'good',
				'data' => $this->users,
				'html'=>'User '.$_POST['name']. ' added'
			));

		}
		else{
			echo json_encode(array(
				'result'=>'error',
				'data' => '',
				'html'=>'ERROR User not added'
			));		
		}

		return;
	}
	public function emailExists($email)
    {
        foreach ($this->users as $user) {
            if ($user['email'] === $email) {
                return true;
            }
        }
        return false;
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
		}
		else{
			echo json_encode(array(
				'result'=>'error',
				'html'=>'ERROR User '.$_POST['id'].$user_del['name']. ' not deleted'
			));
			
		}
		return;
	}
}