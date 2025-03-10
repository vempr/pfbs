<?php

$router->get("/", "controllers/index.php");

$router->get("/note", "controllers/note/index.php");
$router->delete("/note", "controllers/note/delete.php");

$router->get("/note/edit", "controllers/note/edit.php");
$router->put("/note", "controllers/note/put.php");

$router->get("/new", "controllers/new/index.php");
$router->post("/new", "controllers/new/post.php");
