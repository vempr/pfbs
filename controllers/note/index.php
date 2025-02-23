<?php

use Core\App;

$db = App::resolve("Core\Database");
$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, [":id" => (int)$_GET["id"]])->fetch();

view("note/index.view.php", [
  "heading" => "Note",
  "note" => $note
]);
