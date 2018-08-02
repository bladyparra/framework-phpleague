<?php

  namespace Application\Providers;

  use League\Container\ServiceProvider\AbstractServiceProvider;
  use Application\Controllers\HomeController;


  class ControllerServiceProvider extends AbstractServiceProvider {

    /**
     * @var array
     */
    protected $provides =[
      HomeController::class
    ];

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function register()
    {
      $this->getContainer()->add(HomeController::class)->withArguments([
        $this->getContainer()->get(View::class)
      ]);
    }
  }