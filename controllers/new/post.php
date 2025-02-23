<?php

use Core\Database;
use Core\Validator;

$config = require base_path("config.php");
$db = Database::getInstance($config["database"]);

$errors = [];

if (!Validator::string($_POST["body"], 1, 1000)) {
  $errors["body"] = "A body of between 1 and 1000 characters is required.";
}

if (!empty($errors)) {
  view("new.view.php", [
    "heading" => "New Note",
    "errors" => $errors,
  ]);
} else {
  $db->query("INSERT INTO notes(body, author_id) VALUES(:body, :author_id)", [
    "body" => $_POST["body"],
    "author_id" => 1
  ]);

  header("location: /");
  die();
}
