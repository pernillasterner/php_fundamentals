<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My Note';

$id = $_GET['id'];
$currentUserId = 1;

$note = $db->query("select * from notes where id = :id", [
  'id' => $id
])->find();


if (! $note) {
  abort();
}

if ($note['user_id'] !== $currentUserId) {
  abort(Response::FORBIDDEN);
}

require('views/note.view.php'); 
