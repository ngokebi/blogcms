<?php
session_start();
include 'classes/Database.php';
include 'classes/User.php';
include 'classes/Log.php';
include 'classes/Category.php';
include 'classes/Post.php';
include 'classes/Image.php';
include 'classes/NewsLetter.php';

$database = new Database();
$user = new User($database);
$log = new Log($database);
$category = new Category($database);
$post = new Post($database);
$image = new Image($database);
$newsletter = new NewsLetter($database);


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

function createCategory($category_name, $username)
{
  global $category, $log;
  $log->logActivity($username, 'Category ' . $category_name . ' was Created');
  $myResp = $category->create_category($category_name);
  return $myResp;
}

function deleteCategory($id, $username)
{
  global $category, $log;
  $log->logActivity($username, 'Category with id ' . $id . ' was Deleted');
  $myResp = $category->delete_category($id);
  return $myResp;
}

function updateCategory($category_name, $id, $username)
{
  global $category, $log;
  $log->logActivity($username, 'Category with id ' . $id . ' was Updated');
  $myResp = $category->update_category($category_name, $id);
  return $myResp;
}

function createPost($title, $short_desc, $long_desc, $author, $cat_id, $user_id, $username)
{
  global $post, $log;
  $log->logActivity($username, 'Post with title ' . $title . ' was Published');
  $myResp = $post->create_posts($title, $short_desc, $long_desc, $author, $cat_id, $user_id);
  return $myResp;
}

function updatePost($title, $short_desc, $long_desc, $author,  $cat_id, $user_id, $username, $id)
{
  global $post, $log;
  $log->logActivity($username, 'Post with title ' . $title . ' was Updated');
  $myResp = $post->update_posts($title, $short_desc, $long_desc, $author, $cat_id, $user_id, $id);
  return $myResp;
}

function deletePost($id, $username)
{
  global $post, $log;
  $log->logActivity($username, 'Post with id ' . $id . ' was Deleted');
  $myResp = $post->delete_posts($id);
  return $myResp;
}

function deleteImage($id, $username)
{
  global $image, $log;
  $log->logActivity($username, 'Image with id ' . $id . ' was Deleted');
  $myResp = $image->delete_image($id);
  return $myResp;
}

function newsletter_subscription($email, $username)
{
  global $newsletter, $log;
  $log->logActivity($username,  $email . ' subscribed to the Newsletter Posts');
  $myResp = $newsletter->add_email($email);
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

  case "createCategory": {
      echo createCategory($_POST['category_name'], $_SESSION['username']);
      break;
    }

  case "deleteCategory": {
      echo deleteCategory($_POST['id'], $_SESSION['username']);
      break;
    }


  case "updateCategory": {
      echo updateCategory($_POST['category_name'], $_POST['id'], $_SESSION['username']);
      break;
    }

  case "createPost": {
      echo createPost($_POST['title'], $_POST['short_desc'], $_POST['long_desc'], $_POST['author'], $_POST['cat_id'], $_POST['uploaded_by'], $_SESSION['username']);
      break;
    }

  case "updatePost": {
      echo updatePost($_POST['title'], $_POST['short_desc'], $_POST['long_desc'], $_POST['author'], $_POST['cat_id'], $_POST['uploaded_by'], $_SESSION['username'], $_POST['id']);
      break;
    }

  case "deletePost": {
      echo deletePost($_POST['id'], $_SESSION['username']);
      break;
    }

    case "deleteImage": {
      echo deleteImage($_POST['id'], $_SESSION['username']);
      break;
    }

    case "newsletter_subscription": {
      echo newsletter_subscription($_POST['email'], $_SESSION['username']);
      break;
    }
}
