<?php

$db = Database::getInstance($config["database"]);
$query = "SELECT * FROM users";

$users = $db->query($query)->fetchAll();
dd($users);
