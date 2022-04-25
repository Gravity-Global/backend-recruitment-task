<?php

function getUsers()
{
  $json_data = file_get_contents('dataset\users.json');
  return json_decode($json_data, true);
  

};

function createUser($data)
{

  $users = getUsers();
  $data['id'] = rand (10, 1000000000);
  $users [] = $data;

  putJson($users);

  return $data;
 

};

function deleteUser ($id)
{
    $users = getUsers();

    foreach ($users as $i => $user) {         
        if ($user['id'] == $id) {            
            array_splice($users, $i, 1);    // start from index number "$i" and delete one element
        }
    }
  
    putJson($users);
  

};

function putJson($users)
{
    file_put_contents('dataset/users.json', json_encode($users, JSON_PRETTY_PRINT));
}