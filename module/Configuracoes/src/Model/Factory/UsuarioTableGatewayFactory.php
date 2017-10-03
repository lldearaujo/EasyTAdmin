<?php

namespace Configuracoes\Model\Factory;

use Configuracoes\Model\Usuario;
use Psr\Container\ContainerInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class UsuarioTableGatewayFactory{

    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get(AdapterInterface::class);
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype->setArrayObjectPrototype(new Usuario());
        return new TableGateway('usuarios', $dbAdapter, null, $resultSetPrototype);
    }

}
