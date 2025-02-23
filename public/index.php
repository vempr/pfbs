<?php

const BASE_PATH = __DIR__ . "/../";
require_once BASE_PATH . "Core/functions.php";
$config = require base_path("config.php");

parse_env(base_path(".env"));

spl_autoload_register(function ($class) {
  $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
  require_once base_path("Core/" . $class . ".php");
});

$router = new Router();
require_once base_path("routes.php");

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

$router->route($uri, $method);
