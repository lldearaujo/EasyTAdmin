<?php

namespace Configuracoes\Controller\Factory;


use Configuracoes\Controller\ConfiguracoesController;
use Configuracoes\Form\UsuarioForm;
use Configuracoes\Model\UsuarioTable;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\ServiceManager\ServiceManager;

class ConfiguracoesControllerFactory{

    public function __invoke(ContainerInterface $container)
    {

        $serviceManager = new ServiceManager([
            'factories' => [
                UsuarioForm::class => InvokableFactory::class,
            ]
        ]);

        $usuarioTable = $container->get(UsuarioTable::class);
        $usuarioForm = $serviceManager->get(UsuarioForm::class);
        return new ConfiguracoesController($usuarioTable, $usuarioForm);
    }

}
