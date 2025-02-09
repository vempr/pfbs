<?php

$query = "SELECT * FROM notes";
$notes = $db->query($query)->fetchAll();
dd($notes);
