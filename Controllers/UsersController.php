<?php

function getUsers()
{
  $json_data = file_get_contents('dataset\users.json');
  return json_decode($json_data, true);
  

};

function createUser($data)
{

 

};

function deleteUser ($id)
{
 

};

function putJson($users)
{
    
}