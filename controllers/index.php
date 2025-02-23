<?php

$config = require base_path("config.php");
$db = Database::getInstance($config["database"]);
$query = "SELECT * FROM notes WHERE author_id = 1";

$notes = $db->query($query)->fetchAll();

view("index.view.php", [
  "heading" => "My Notes",
  "notes" => $notes
]);
