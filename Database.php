<?php

class Database {
  private static $instance = null;
  public $connection;

  private function __construct($config) {
    $dsn = "pgsql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";
    $this->connection = new PDO($dsn, getenv("DATABASE_USERNAME"), getenv("DATABASE_PASSWORD"), [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public static function getInstance($config) {
    if (self::$instance === null) {
      self::$instance = new self($config);
    }
    return self::$instance->connection;
  }

  public function query($query, $params = []) {
    $statement = $this->connection->prepare($query);
    $statement->execute($params); // pretend the params have been validated
    return $statement;
  }
}
