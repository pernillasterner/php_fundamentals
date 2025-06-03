<?php

require('functions.php');
// require('router.php');
require('Database.php');

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "SELECT * FROM notes WHERE id = :id";

$notes = $db->query($query, ['id' => $id])->fetch();

dd($notes);