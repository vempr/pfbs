<?php

use Core\App;
use Core\Validator;

$db = App::resolve("Core\Database");
$query = "SELECT * FROM notes WHERE id = :id";

$statement = $db->query($query, [":id" => (int)$_POST["id"]]);
$note = $db->fetchOrFail($statement);

$errors = [];

if (!Validator::string($_POST["body"], 1, 1000)) {
  $errors["body"] = "A body of between 1 and 1000 characters is required.";
}

if (!empty($errors)) {
  return view("note/edit.view.php", [
    "heading" => "Edit Note",
    "errors" => $errors,
    "body" => $_POST["body"],
    "id" => $_POST["id"]
  ]);
  die();
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", [
  "body" => $_POST["body"],
  "id" => $_POST["id"]
]);

header("location: /note?id={$_POST["id"]}");
die();
