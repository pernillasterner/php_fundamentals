<?php

require('functions.php');
// require('router.php');


// connect to MySQL database
$dns = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

$pdo = new PDO($dns);

// prepared query statement
$statement = $pdo->prepare("SELECT * FROM notes");
$statement->execute();

$notes = $statement->fetchAll();

dd($notes);