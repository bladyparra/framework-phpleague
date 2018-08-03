<?php

  namespace Application\Providers;

  use League\Container\ServiceProvider\AbstractServiceProvider;
  use Application\Controllers\HomeController;
  use Application\Services\Twig;
  use Application\Controllers\ProfileController;


  class ControllerServiceProvider extends AbstractServiceProvider {

    /**
     * @var array
     */
    protected $provides =[
      HomeController::class,
      ProfileController::class
    ];

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function register()
    {
      $this->getContainer()->add(HomeController::class)->withArguments([
        $this->getContainer()->get(Twig::class)
      ]);
      $this->getContainer()->add(ProfileController::class)->withArguments([
        $this->getContainer()->get(Twig::class)
      ]);
    }
  }