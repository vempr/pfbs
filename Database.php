<?php

class Database {
  public $connection;

  public function __construct($config, $username, $password) {
    $dsn = "pgsql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";
    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query, $params = []) {
    $statement = $this->connection->prepare($query);
    $statement->execute($params); // pretend the params have been validated
    return $statement;
  }
}
