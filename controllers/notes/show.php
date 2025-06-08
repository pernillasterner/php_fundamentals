<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];
$currentUserId = 1;

$note = $db->query("select * from notes where id = :id", [
  'id' => $id
])->findOrFail();


authorize($note['user_id'] === $currentUserId);

view('notes/show.view.php', [
  'heading' => 'My Note',
  'note' => $note
]);