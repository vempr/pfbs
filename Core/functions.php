<?php

function dd($value) {
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function uriIs($value) {
  return $_SERVER["REQUEST_URI"] === $value;
}

function parse_env($filePath) {
  $env = file_get_contents($filePath);
  $lines = explode("\n", $env);

  foreach ($lines as $line) {
    $line = trim($line);
    if ($line === "" || strpos($line, "#") === 0) {
      continue; // Skip empty lines and comments
    }

    list($key, $value) = explode("=", $line, 2);
    putenv(trim($key) . "=" . trim($value));
  }
}

function base_path($path) {
  return BASE_PATH . $path;
}
