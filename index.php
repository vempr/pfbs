<?php

require "functions.php";
require "Database.php";
$config = require("config.php");

parseEnv(__DIR__ . "/.env");

$db = new Database(
  $config["database"],
  getenv("DATABASE_USERNAME"),
  getenv("DATABASE_PASSWORD")
);

$username = $_GET["username"] ?? "";
$query = "SELECT * FROM users WHERE username = :username";

$user = $db->query($query, [":username" => $username])->fetch();
dd($user);
