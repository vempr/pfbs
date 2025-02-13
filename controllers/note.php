<?php

$db = Database::getInstance($config["database"]);
$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, [":id" => (int)$_GET["id"]])->fetch();
dd($note);
