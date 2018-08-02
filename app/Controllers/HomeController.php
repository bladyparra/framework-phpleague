<?php

  namespace Application\Controllers;

  class HomeController {

    public function index($request, $response)
    {
    \Kint::dump('request');
    }
  }