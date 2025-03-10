<?php

class database {
  public $connection;

  public function __construct($config, $username = 'root', $password = 'root'){
    
    $dsn = 'mysql:' . http_build_query($config, '', ';');

    $this->connection = new PDO($dsn, 'root', 'root', [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  public function query($input, $params = []) {
    

    $statement = $this->connection->prepare($input);
    $statement->execute($params);

    return $statement;
  }
}