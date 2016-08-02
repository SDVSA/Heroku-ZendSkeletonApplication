<?php
namespace Autenticacion;
return array(
    'controllers' => array(
        'invokables' => array(
            'Autenticacion\Controller\Index' => 'Autenticacion\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'autenticacion' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/login/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Autenticacion\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'salir' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'salir',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Autenticacion\Controller',
                                'controller' => 'Index',
                                'action' => 'salir',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'navigation' => array(
        'login' => array(
            array(
                'label' => 'Entrar',
                'route' => 'autenticacion',
            ),
            'logout' => array(
                array(
                    'label' => 'Salir',
                    'route' => 'autenticacion/salir',
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'layout/autenticacion' => __DIR__ . '/../view/layout/layout.phtml',
        ),
        'template_path_stack' => array(
            'login' => __DIR__ . '/../view',
        ),
    ),
);
