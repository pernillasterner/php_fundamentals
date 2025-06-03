<?php

// Connect to db, and execute a query
class Database
{
  public $connection;

  public function __construct($config, $username = 'root', $password = '')
  {

    // "host=localhost;port=3306;dbname=myapp;charset=utf8mb4"
    $host = http_build_query($config, '', ';'); //example.com?host=localhost&port=3006
    
    $dns = "mysql:{$host}";
    $this->connection = new PDO($dns, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query, $params = [])
  {
    // prepared query statement
    $statement = $this->connection->prepare($query);
    $statement->execute($params);

    return $statement;
  }
}
