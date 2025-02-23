<?php

use Core\Database;

$config = require base_path("config.php");
$db = Database::getInstance($config["database"]);
$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, [":id" => (int)$_GET["id"]])->fetch();

view("note/index.view.php", [
  "heading" => "Note",
  "note" => $note
]);
