<?php

$db = Database::getInstance($config["database"]);
$query = "SELECT * FROM notes";

$notes = $db->query($query)->fetchAll();
dd($notes);
