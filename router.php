<?php

$routes = [
  "/" => "controllers/index.php",
  "/about" => "controllers/about.php",
];

function routeToController($path, $routes, $db) {
  if (array_key_exists($path, $routes)) {
    require $routes[$path];
  } else {
    abort();
  }
}

function abort($code = 404) {
  http_response_code($code);
  require "views/{$code}.view.php";
  die();
}
