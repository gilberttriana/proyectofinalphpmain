<?php

$request = $_SERVER["REQUEST_URI"];

$routes = include("urls.php");
if (array_key_exists($request, $routes)) {
    require_once($routes[$request]);
} else {
    http_response_code(404);
    require_once(__DIR__ . "/views/404.php");
}