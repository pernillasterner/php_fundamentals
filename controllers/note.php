<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My Note';

$id = $_GET['id'];

$note = $db->query("select * from notes where id = :id", [
  'id' => $id
])->fetch();


if (! $note) {
  abort();
}

$currentUserId = 1;

if ($note['user_id'] !== $currentUserId) {
  abort(403);
}

require('views/note.view.php'); 
