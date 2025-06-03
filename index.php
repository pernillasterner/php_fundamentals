<?php

require('functions.php');
// require('router.php');


// Connect to db, and execute a query
class Database
{

  public $connection;

  public function __construct()
  {
    $dns = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
    $this->connection = new PDO($dns);
  }

  public function query($sql)
  {
    // prepared query statement
    $statement = $this->connection->prepare($sql);
    $statement->execute();

    return $statement;
  }
}

$db = new Database();
$db->query("SELECT * FROM notes")->fetchAll(PDO::FETCH_ASSOC);