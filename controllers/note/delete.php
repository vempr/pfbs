<?php

use Core\App;

$db = App::resolve("Core\Database");

$db->query("DELETE FROM notes WHERE id = :id", [
  "id" => $_POST["id"]
]);

header("location: /");
die();
