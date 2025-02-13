<?php

$db = Database::getInstance($config["database"]);
$userQuery = "SELECT * FROM users WHERE id = :id";
$notesQuery = "SELECT * FROM notes WHERE author_id = :id";

$user = $db->query($userQuery, [":id" => (int)$_GET["id"]])->fetch();
$notes = $db->query($notesQuery, [":id" => (int)$_GET["id"]])->fetchAll();

dd(["user" => $user, "notes" => $notes]);
