<?php
include 'partials/header.php';
require  'Controllers/usersController.php';


$userId = $_POST['id'];
deleteUser($userId);

header("Location: index.php");