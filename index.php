<?php

require_once "functions.php";
require_once "Database.php";
require_once "router.php";

parseEnv(__DIR__ . "/.env");
$config = require("config.php");
$db = Database::getInstance($config["database"]);

$path = parse_url($_SERVER["REQUEST_URI"])["path"];
routeToController($path, $routes, $db);
