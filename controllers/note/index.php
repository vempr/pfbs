<?php

use Core\App;

$db = App::resolve("Core\Database");
$query = "SELECT * FROM notes WHERE id = :id";

$statement = $db->query($query, [":id" => (int)$_GET["id"]]);
$note = $db->fetchOrFail($statement);

view("note/index.view.php", [
  "heading" => "Note",
  "note" => $note
]);
