<?php

$query = "SELECT * FROM notes WHERE id = :id";
$note = $db->query($query, [":id" => (int)$_GET["id"]])->fetch();
dd($note);
