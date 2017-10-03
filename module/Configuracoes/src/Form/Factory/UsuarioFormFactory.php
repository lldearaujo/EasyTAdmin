<?php

namespace Configuracoes\Form\Factory;



use Configuracoes\Form\UsuarioForm;
use Configuracoes\InputFilter\UsuarioInputFilter;
use Interop\Container\ContainerInterface;

class UsuarioFormFactory{


    public function __invoke(ContainerInterface $container)
    {
        $inputFilter = new UsuarioInputFilter();
        $form = new UsuarioForm();
        $form->setInputFilter($inputFilter);
        return $form;
    }
}
