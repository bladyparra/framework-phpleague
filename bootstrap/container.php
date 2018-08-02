<?php

  require __DIR__ .'/../vendor/autoload.php';

  $dotenv = new \Dotenv\Dotenv(base_path(''));
  $dotenv->load();

  Kint::dump(getenv('DB_NAME'));