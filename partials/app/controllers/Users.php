<?php

namespace app\controllers;

class Users extends \app\core\Controller{

    private $usersRepository;

    public function __construct() {
        $this->usersRepository = $this -> model("UsersModel");
    }

    public function index(){
        $data = [
            "users" => $this->usersRepository->getAllUsers(),
        ];

        $this -> view("table/index", $data);
        die();
    }

    public function add() {
        $add = ['name','username','email','street','suite','city','zipcode','lat','lng','phone','website','companyName','catchPhrase','bs'];
        $array = [];
        foreach ($add as $data) {
            $array = array_merge($array, array($data => $_POST[$data] ?? ''));
        }
        $this->usersRepository->add($array);
        $this->redirect('/users');
    }

    public function form(?array $id = null) {
        if(!is_null($id)) {
            $data = [
                "user" => $this->usersRepository->getUserById($id)
            ];
        }
        $this->view("table/form", $data ?? []);
    }

    public function delete($id) {
        $this->usersRepository->delete($id);
        $this->redirect('/users');
    }

    public function redirect(string $url, int $statusCode = 303) {
        header("Location: $url", true, $statusCode);
        die();
    }

    public function p($data) {
        echo "<pre>";
        print_r($data);
        die("p");
    }
}