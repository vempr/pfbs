<?php

namespace Core;

use PDO;

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
    return self::$instance;
  }

  public function query($query, $params = []) {
    $statement = $this->connection->prepare($query);
    $statement->execute($params);
    return $statement;
  }

  public function fetchOrFail($connection) {
    $result = $connection->fetch();
    if (!$result) {
      abort();
    }
    return $result;
  }
}
