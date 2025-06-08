<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$currentUserId = 1;


// before deleting, track down the note that matches the id
$note = $db->query("select * from notes where id = :id", [
  'id' => $_POST['id']
])->findOrFail();

// is the user id the same as the current user id
authorize($note['user_id'] === $currentUserId);

// form was submitted. delete the current note
$db->query('delete from notes where id = :id', [
  'id' => $_POST['id']
]);

// redirect to the page that shows all the notes
header('Location: /notes');
exit;
