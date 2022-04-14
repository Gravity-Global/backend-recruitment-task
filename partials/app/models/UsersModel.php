<?php

namespace app\models;

use Dompdf\Exception;

class UsersModel {

    private string $repositoryPath;

    public function __construct() {
        $this->repositoryPath = dirname(__DIR__, 3) . '/dataset/users.json';
    }

    public function getAllUsers() : array{
        $return = [];
        if(file_exists($this->repositoryPath)) {
            $json = file_get_contents(dirname(__DIR__, 3) . '/dataset/users.json');
            $return = json_decode($json, true);
        }
        return $return;
    }

    public function add(array $add) {
        $return = [];
        if(file_exists($this->repositoryPath)) {
            $json = file_get_contents(dirname(__DIR__, 3) . '/dataset/users.json');
            $json_decode = json_decode($json, true);
        }
        $arrayAdd = array(
            'id' => ($json_decode[sizeof($json_decode)-1]['id'])+1,
            'name' => htmlentities($add['name'], ENT_QUOTES),
            'username' => htmlentities($add['username'], ENT_QUOTES),
            'email' => htmlentities($add['email'], ENT_QUOTES),
            'address' => array(
                'street' => htmlentities($add['street'], ENT_QUOTES),
                'suite' => htmlentities($add['suite'], ENT_QUOTES),
                'city' => htmlentities($add['city'], ENT_QUOTES),
                'zipcode' => htmlentities($add['zipcode'], ENT_QUOTES),
                'geo' => array(
                    'lat' => htmlentities($add['lat'], ENT_QUOTES),
                    'lng' => htmlentities($add['lng'], ENT_QUOTES)
                )
            ),
            'phone' => htmlentities($add['phone'], ENT_QUOTES),
            'website' => htmlentities($add['website'], ENT_QUOTES),
            'company' => array(
                'name' => htmlentities($add['companyName'], ENT_QUOTES),
                'catchPhrase' => htmlentities($add['catchPhrase'], ENT_QUOTES),
                'bs' => htmlentities($add['bs'], ENT_QUOTES)
            )
        );
        $array = [];
        foreach ($json_decode as $json) {
            $array[] .= json_encode($json);
        }
        $array[] .= json_encode($arrayAdd);
        $json = json_encode($array);
        $json = str_replace('\\\\\\', '',$json);
        $json = str_replace('"', "",$json);
        $json = str_replace('\\', '"',$json);
        file_put_contents($this->repositoryPath, $json);
    }

    public function delete($id) {
        if(file_exists($this->repositoryPath)) {
            $json = file_get_contents(dirname(__DIR__, 3) . '/dataset/users.json');
            $json_decode = json_decode($json, true);
        }
        unset($json_decode[$id]);
        $array = [];
        foreach ($json_decode as $json) {
            $array[] .= json_encode($json);
        }
        $json = json_encode($array);
        $json = str_replace('\\\\\\', '',$json);
        $json = str_replace('"', "",$json);
        $json = str_replace('\\', '"',$json);
        file_put_contents($this->repositoryPath, $json);
    }

    public function p($data) {
        echo "<pre>";
        var_dump($data);
        die("p");
    }
}