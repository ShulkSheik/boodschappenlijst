<?php

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

$routes = require('routes.php');

function abort(){
  http_response_code(404);

  require 'views/404.php';

  die();
}

function routeToController($uri, $routes){
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  }else {
    abort();
  }
}

routeToController($uri, $routes);