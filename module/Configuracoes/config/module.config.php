<?php
return [
    'controllers' => [
        'factories' => [
            # Configuracoes\Controller\ConfiguracoesController::class=>\Zend\ServiceManager\Factory\InvokableFactory::class

        ]
    ],

    'router' => [
        'routes' => [
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
        ],
    ],


    'view_manager' => [
        'template_path_stack' => [
            'configuracoes' => __DIR__ . "/../view"
        ]

    ]
    //   'template_path_stack' => array(
    //       'Configuracoes' => __DIR__ . '/../view',
    //   ),
    //),
];
