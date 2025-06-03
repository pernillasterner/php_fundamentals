<?php

require('functions.php');
// require('router.php');
require('Database.php');

$config = require('config.php');

$db = new Database($config);
$notes = $db->query("SELECT * FROM notes")->fetchAll(PDO::FETCH_ASSOC);

dd($notes);