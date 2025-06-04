<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My Note';

$id = $_GET['id'];

$note = $db->query("select * from notes where id = :id", ['id' => $id])->fetch();

require('views/note.view.php'); 
