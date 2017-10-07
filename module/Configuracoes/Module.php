<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Configuracoes for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Configuracoes;

use Ccnfiguracoes\Form\Factory\UsuarioFormFactory;
use Configuracoes\Controller\ConfiguracoesController;
use Configuracoes\Controller\Factory\ConfiguracoesControllerFactory;
use Configuracoes\Form\UsuarioForm;
use Configuracoes\Model\Factory\UsuarioTableFactory;
use Configuracoes\Model\Factory\UsuarioTableGatewayFactory;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface, ServiceProviderInterface, ControllerProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
		    // if we're in a namespace deeper than one level we need to fix the \ in the path
                    __NAMESPACE__ => __DIR__ . '/src/' . str_replace('\\', '/' , __NAMESPACE__),
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function onBootstrap(MvcEvent $e)
    {
        // You may not need to do this if you're doing it elsewhere in your
        // application
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getServiceConfig()
    {
        return
        [
            'factories'=> [
                Model\UsuarioTable::class => UsuarioTableFactory::class,
                Model\UsuarioTableGateway::class=> UsuarioTableGatewayFactory::class,
                UsuarioForm::class => UsuarioFormFactory::class

            ]
        ];
    }

    public function getControllerConfig()
    {
        return [
            'factories'=>[
                ConfiguracoesController::class => ConfiguracoesControllerFactory::class
            ]
        ];
    }
}
