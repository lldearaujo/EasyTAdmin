<?php
namespace User;

use User\Controller;
use Zend\Router\Http\Literal;


return array(
    'controllers' => array(
        'invokables' => array(
            #'User\Controller\Auth' => 'User\Controller\AuthController',
        ),
    ),
    'router' => [
        'routes' => [
            'login' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/auth/login',
                    'defaults' => [
                        'controller' => Controller\AuthController::class,
                        'action' => 'login',
                    ],
                ],
            ],

            'logout' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/auth/logout',
                    'defaults' => [
                        'controller' => Controller\AuthController::class,
                        'action' => 'logout',
                    ],
                ],
            ],

        ],
    ],
    'view_manager' => array(
        'template_path_stack' => array(
            'User' => __DIR__ . '/../view',
        ),
    ),
);
