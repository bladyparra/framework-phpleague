<?php

  require __DIR__ .'/../vendor/autoload.php';

  $dotenv = new \Dotenv\Dotenv(base_path(''));
  $dotenv->load();

  Kint::dump(getenv('DB_NAME'));

  $container = new \League\Container\Container;

  $container->share('response', \Zend\Diactoros\Response::class);
  $container->share('request', function(){
    return \Zend\Diactoros\ServerRequestFactory::fromGlobals(
      $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
    );
  });

  Kint::dump($container->get('response'));