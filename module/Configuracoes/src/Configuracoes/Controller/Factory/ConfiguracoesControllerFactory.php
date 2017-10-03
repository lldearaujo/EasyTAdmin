<?php

namespace Configuracoes\Controller\Factory;


use Configuracoes\Controller\ConfiguracoesController;
use Configuracoes\Form\UsuarioForm;
use Configuracoes\Model\UsuarioTable;
use Interop\Container\ContainerInterface;

class ConfiguracoesControllerFactory{

    public function __invoke(ContainerInterface $container)
    {
        $usuarioTable = $container->get(UsuarioTable::class);
        $usuarioForm = $container->get(UsuarioForm::class);
        return new ConfiguracoesController($usuarioTable, $usuarioForm);
    }

}
