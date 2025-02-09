<?php

$userQuery = "SELECT * FROM users WHERE id = :id";
$user = $db->query($userQuery, [":id" => (int)$_GET["id"]])->fetch();

$notesQuery = "SELECT * FROM notes WHERE author_id = :id";
$notes = $db->query($notesQuery, [":id" => (int)$_GET["id"]])->fetchAll();

dd(["user" => $user, "notes" => $notes]);
