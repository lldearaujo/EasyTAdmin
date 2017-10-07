<?php

namespace User\Service\Factory;

use Interop\Container\ContainerInterface;
use Zend\Authentication\Adapter\DbTable\CallbackCheckAdapter;
use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Storage\Session;
use Zend\Db\Adapter\AdapterInterface;

class AuthenticationServiceFactory
{
    //Pegar adaptador banco de dados
    //Configurar o adpatador para administrar a autenticação do usuário
    //Criar sessão para guardamos o usuário
    //Criar o serviço de AuthenticationService

    public function __invoke(ContainerInterface $container)
    {
        $passwordCallbackVerify = function ($passwordInDB, $passwordSent){
            return password_verify($passwordSent, $passwordInDB);
        };
        $dbAdapter = $container->get(AdapterInterface::class);
        $authAdapter = new CallbackCheckAdapter($dbAdapter, 'usuarios', 'usuario', 'senha', $passwordCallbackVerify);
        $storage = new Session();
        return new AuthenticationService($storage, $authAdapter);
    }
}
