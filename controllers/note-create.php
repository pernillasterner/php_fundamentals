<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

  $errors = [];

  if(strlen($_POST['body']) === 0) {
    $errors['body'] = 'A body is required';
  }

  if(empty($errors)) {
    $db->query("insert into notes(body, user_id) values (:body, :user_id)", [
      'body' => $_POST['body'],
      'user_id' => 1
    ]);
  }
  
}

require('views/note-create.view.php'); 