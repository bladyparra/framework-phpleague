<?php

  namespace Application\Controllers;

  use Application\Services\View;

  class HomeController extends BaseController {

    public function __construct(View $view)
    {
      parent::__construct($view);
    }

    public function index($request, $response)
    {
      
    }
  }