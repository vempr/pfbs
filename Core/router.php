<?php

function routeToController($path, $routes, $config) {
  if (array_key_exists($path, $routes)) {
    require base_path($routes[$path]);
  } else {
    abort();
  }
}

function abort($code = 404) {
  http_response_code($code);
  require "views/{$code}.view.php";
  die();
}

$routes = require(base_path("routes.php"));
$path = parse_url($_SERVER["REQUEST_URI"])["path"];
routeToController($path, $routes, $config);
