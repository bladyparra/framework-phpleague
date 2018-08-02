<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  require __DIR__ .'/../vendor/autoload.php';

  $dotenv = new \Dotenv\Dotenv(base_path(''));
  $dotenv->load();

  $container = new \League\Container\Container;

  $container->share('response', \Zend\Diactoros\Response::class);
  $container->share('request', function(){
    return \Zend\Diactoros\ServerRequestFactory::fromGlobals(
      $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
    );
  });

  $container->addServiceProvider(new \Application\Providers\SessionServiceProvider);
  $container->addServiceProvider(new \Application\Providers\ViewServiceProvider);

  $route = require base_path('routes/web.php');
