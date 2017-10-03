<?php

namespace User\Controller\Factory;

use Interop\Container\ContainerInterface;
use User\Controller\AuthController;
use User\Form\LoginForm;

class AuthControllerFactory{

    public function __invoke(ContainerInterface $container)
    {
        $loginForm = $container->get(LoginForm::class);
        return new AuthController($loginForm);
    }

}
