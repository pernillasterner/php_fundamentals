<?php

// Connect to db, and execute a query
class Database
{
  public $connection;
  public $statement;

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
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);

    return $this;
  }

  public function find()
  {
    return $this->statement->fetch();
  }

  public function get() 
  {
    return $this->statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function findOrFail()
  {
    // Use find method to fetch the data
    $result = $this->find();

    // Check if there is a result
    if (! $result) {
      abort();
    }
    
    return $result;
  }

}
