<?php

// Connect to db, and execute a query
class Database
{
  public $connection;

  public function __construct($config)
  {

    // "host=localhost;port=3306;dbname=myapp;charset=utf8mb4"
    $host = http_build_query($config, '', ';'); //example.com?host=localhost&port=3006
    
    $dns = "mysql:{$host}";
    $this->connection = new PDO($dns, 'root', '', [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($sql)
  {
    // prepared query statement
    $statement = $this->connection->prepare($sql);
    $statement->execute();

    return $statement;
  }
}
