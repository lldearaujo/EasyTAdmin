<?php

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'controllers' => [
        'factories' => [
            # Configuracoes\Controller\ConfiguracoesController::class=>\Zend\ServiceManager\Factory\InvokableFactory::class

        ]
    ],

    'router' => [
        'routes' => [
            'admin-configuracoes' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/admin'
                ],
                'may_terminate' => false,
                'child_routes' => [
                    'configuracoes' => [
                        'type' => Segment::class,
                        'options' => [
                            'route' => '/configuracoes[/:action[/:id]]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id' => '[0-9]+',
                            ],
                            'defaults' => [
                                'controller' => Configuracoes\Controller\ConfiguracoesController::class,
                                'action' => 'index',
                            ],
                        ],
                    ],
                ]
            ],
        ]
    ],


    'view_manager' => [
        'template_path_stack' => [
            'admin-configuracoes/configuracoes' => __DIR__ . "/../view"
        ]

    ]
    //   'template_path_stack' => array(
    //       'Configuracoes' => __DIR__ . '/../view',
    //   ),
    //),
];
