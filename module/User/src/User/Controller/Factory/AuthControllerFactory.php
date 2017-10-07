<?php

namespace User\Controller\Factory;

use Interop\Container\ContainerInterface;
use User\Controller\AuthController;
use User\Form\LoginForm;
use Zend\Authentication\AuthenticationServiceInterface;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\ServiceManager\ServiceManager;

class AuthControllerFactory{

    public function __invoke(ContainerInterface $container)
    {
        $serviceManager = new ServiceManager([
            'factories' => [
                LoginForm::class => InvokableFactory::class,
            ]
        ]);

        $authService = $container->get(AuthenticationServiceInterface::class);


        $loginForm = $serviceManager->get(LoginForm::class);
        return new AuthController($authService);
    }

}
