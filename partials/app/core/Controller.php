<?php
namespace app\core;

if(!isset($_SESSION)) {
    session_start();
}

class Controller{

    public function model($model){
        $model = "\app\models\\$model";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once (dirname(__DIR__,2)."/app/views/" . $view . ".php");
    }

}

?>