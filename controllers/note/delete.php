<?php

$config = require base_path("config.php");
$db = Database::getInstance($config["database"]);

$db->query("DELETE FROM notes WHERE id = :id", [
  "id" => $_POST["id"]
]);

header("location: /");
die();
