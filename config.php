<?php

return [
  "database" => [
    "host" => "localhost",
    "port" => 5432,
    'username' => getenv("DATABASE_USERNAME"),
    'password' => getenv("DATABASE_PASSWORD"),
    "dbname" => "noteit",
    "charset" => "UTF8",
  ],
];
