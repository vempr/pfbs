<?php

const BASE_PATH = __DIR__ . '/../';
require_once BASE_PATH . "Core/functions.php";
$config = require(base_path("config.php"));

parse_env(base_path(".env"));

spl_autoload_register(function ($class) {
  $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
  require_once base_path($class . ".php");
});

require_once base_path("Core/router.php");
