<?php

$query = "SELECT * FROM users";
$users = $db->query($query)->fetchAll();
dd($users);
