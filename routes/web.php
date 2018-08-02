<?php

  use Psr\Http\Message\ResponseInterface;
  use Psr\Http\Message\ServerRequestInterface;

  $route = new \League\Route\RouteCollection($container);

  $route->group('/', function (\League\Route\RouteGroup $route) use($container) {
    $route->map('GET', '/','Application\Controllers\HomeController::index');
  });

  return $route;