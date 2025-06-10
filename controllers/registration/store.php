<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form input
$errors = [];
if (! Validator::email($email)) {
  $errors['email'] = 'Please provide a valid email address.';
}

if (! Validator::string($password, 7, 255)) {
  $errors['password'] = 'Please provide a password of at least 7 characters';
}

if (! empty($errors)) {
  return view('registration/create.view.php', [
    'errors' => $errors
  ]);
}
// check if account already exists

$db = App::resolve(Database::class);
$user = $db->query('select * from users where email = :email', [
  'email' => $email
])->find();


if($user) {
  // if YES, redirect to a login page
  header('Location: /login');
  exit();

} else {
  // if NO, save one to the database, login in the user and redirect
  $db->query('insert into users(password, email) values(:password, :email)', [
    'password' => $password, 
    'email' => $email
  ]);

  // mark that the user has logged in 
  $_SESSION['user'] = [
    'email' => $email
  ];

  header('Location: /');
  exit();
}
