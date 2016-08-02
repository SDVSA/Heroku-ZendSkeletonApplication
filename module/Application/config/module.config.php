<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

return array(
    'router' => array(
        'routes' => array(
            'default' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'aplicacion' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[:controller/[:action[/:id].html]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id' => '([0-9]+|todos)',
                            ),
                            'defaults' => array(
                                '__NAMESPACE__' => 'Application\Controller',
                            ),
                        ),
                    ),
                    'accion' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[:action[/:id]].htm',
                            'constraints' => array(
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id' => '([0-9]+|todos)',
                            ),
                            'defaults' => array(
                                '__NAMESPACE__' => 'Application\Controller',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controller_plugins' => array(
        'gravatar' => 'Zend\View\Helper\Gravatar',
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
            'Zend\Navigation\Service\NavigationAbstractServiceFactory'
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'es_VE',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => Controller\IndexController::class,
        ),
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Inicio',
                'route' => 'default',
//                'pages' => array(
//                    array(
//                        'label' => 'Nosotros',
//                        'title' => 'Acerca de nosotros',
//                        'route' => 'home/estaticas',
//                        'params' => array(
//                            'pagina' => 'nosotros'
//                        ),
//                        'pages' => array(
//                            array(
//                                'label' => '¿Quiénes somos?',
//                                'title' => 'Acerca de ¿quiénes somos?',
//                                'route' => 'home/estaticas',
//                                'params' => array(
//                                    'pagina' => 'nosotros'
//                                ),
//                            ),
//                            array(
//                                'label' => 'Equipo de trabajo',
//                                'route' => 'home/estaticas',
//                                'params' => array(
//                                    'pagina' => 'equipo'
//                                ),
//                            ),
//                        ),
//                    ),
//                    array(
//                        'label' => 'Galerías fotográficas',
//                        'route' => 'home/dinamicas',
//                        'action' => 'fotos',
//                    ),
//                    array(
//                        'label' => 'Vídeos',
//                        'route' => 'home/dinamicas',
//                        'action' => 'videos',
//                    ),
//                    array(
//                        'label' => 'Testimonios',
//                        'route' => 'home/dinamicas',
//                        'action' => 'testimonios',
//                    ),
//                    array(
//                        'label' => 'Contactos',
//                        'route' => 'home/estaticas',
//                        'params' => array(
//                            'pagina' => 'contactos'
//                        ),
//                    ),
//                ),
            ),
            array(
                'label' => 'Otro',
                'route' => 'default/accion',
                'params' => array(
                    'action' => 'about'
                ),
            )
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            //'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
