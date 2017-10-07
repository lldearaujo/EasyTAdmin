<?php

namespace User\Form\Factory;

use User\InputFilter\LoginInputFilter;
use Interop\Container\ContainerInterface;
use User\Form\LoginForm;


class LoginFormFactory{


    public function __invoke(ContainerInterface $container)
    {
        $inputFilter = new LoginInputFilter();
        $loginForm = new LoginForm();
        $loginForm->setInputFilter($inputFilter);
        return $loginForm;
    }
}
