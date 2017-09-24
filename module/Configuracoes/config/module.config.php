<?php
return [
    'controllers' => [
        'factories' => [
           # Configuracoes\Controller\ConfiguracoesController::class=>\Zend\ServiceManager\Factory\InvokableFactory::class

        ]
    ],
      #  'factories' => array(
            #'Configuracoes\Controller\Configuracoes' => 'Configuracoes\Controller\ConfiguracoesController',
     #   ),
    'router' => [
        'routes' => [
            'configuracoes' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/configuracoes',
                    'defaults' => [
                        'controller' => Configuracoes\Controller\ConfiguracoesController::class,
                        'action'=> 'index'
                    ]
                ]
            ]
        ]






        /*'routes' => array(
            'configuracoes' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/configuracoes',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Configuracoes\Controller',
                        'controller'    => 'Configuracoes',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),*/
    ],
    'view_manager' => [
        'template_path_stack' => [
            'configuracoes'=>__DIR__."/../view"
        ]

    ]
     //   'template_path_stack' => array(
     //       'Configuracoes' => __DIR__ . '/../view',
     //   ),
    //),
];
