<?php
session_start();
include 'classes/Database.php';
include 'classes/User.php';
include 'classes/Log.php';
include 'classes/Category.php';

$database = new Database();
$user = new User($database);
$log = new Log($database);
$category = new Category($database);


function registerUser($username, $name, $email, $password)
{
  global $user;

  $myResp = $user->register($username, $name, $email, $password);
  return $myResp;
}

function checkUsername($username)
{
  global $user;

  $myResp = $user->usernameAvailable($username);
  return $myResp;
}

function loginUser($username, $password)
{
  global $user, $log;
  $log->logActivity($username, 'Successful Login');
  $myResp = $user->login($username, $password);
  return $myResp;
}


switch ($_POST['action']) {

  case "registerUser": {
      echo registerUser($_POST['username'], $_POST['name'], $_POST['email'], $_POST['password']);
      break;
    }

  case "checkUsername": {
      echo checkUsername($_POST['username']);
      break;
    }

  case "loginUser": {
      echo loginUser($_POST['username'], $_POST['password']);
      break;
    }
}
