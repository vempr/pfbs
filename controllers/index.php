<?php

use Core\App;

$db = App::resolve("Core\Database");
$query = "SELECT * FROM notes WHERE author_id = 1";

$notes = $db->query($query)->fetchAll();

view("index.view.php", [
  "heading" => "My Notes",
  "notes" => $notes
]);
