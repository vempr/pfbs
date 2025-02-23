<?php

use Core\App;

$db = App::resolve("Core\Database");
$query = "SELECT * FROM notes WHERE id = :id";

$statement = $db->query($query, [":id" => (int)$_GET["id"]]);
$note = $db->fetchOrFail($statement);

view("note/edit.view.php", [
  "heading" => "Edit Note",
  "note" => $note
]);
