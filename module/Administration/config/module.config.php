<?php

namespace Administration;

return array(
    'controllers' => array(
        'invokables' => array(
            'Administration\Controller\Index' => Controller\IndexController::class,
            /**/
            'Administration\Controller\Ubicacion' => Controller\UbicacionController::class,
            'Administration\Controller\Contactos' => Controller\ContactosController::class,
            'Administration\Controller\Mensajes' => Controller\MensajesController::class,
            'Administration\Controller\Agenda' => Controller\AgendaController::class,
            'Administration\Controller\Media' => Controller\MediaController::class,
            'Administration\Controller\Estadisticas' => Controller\EstadisticasController::class,
            'Administration\Controller\Configuracion' => Controller\ConfiguracionController::class,
            'Administration\Controller\Notas' => Controller\NotasController::class,
            /**/
            'Administration\Controller\Notificaciones' => Controller\NotificacionesController::class,
            'Administration\Controller\Calendario' => Controller\CalendarioController::class,
            'Administration\Controller\Perfil' => Controller\PerfilController::class,
            'Administration\Controller\Opciones' => Controller\OpcionesController::class,
        ),
    ),
    'router' => array(
        'routes' => array(
            'administration' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/admin/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Administration\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'ubicacion' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'ubicacion/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Ubicacion',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'contactos' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'contactos/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Contactos',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'mensajes' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'mensajes/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Mensajes',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'agenda' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'agenda/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Agenda',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'media' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'media/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Media',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'estadisticas' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'estadisticas/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Estadisticas',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'configuracion' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'configuracion/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Configuracion',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'notas' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'notas/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Notas',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'notificaciones' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'notificaciones/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Notificaciones',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'calendario' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'calendario/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Calendario',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'perfil' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'perfil/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Perfil',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'opciones' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'opciones/',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Administration\Controller',
                                'controller' => 'Opciones',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:controller/[:action[/:id].html]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                            'default_action' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '[:action[/:id]].htm',
                                    'constraints' => array(
                                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id' => '([0-9]+|todos)',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'navigation' => array(
        'aplicaciones' => array(
            array(
                'label' => 'Ubicación',
                'route' => 'administration/ubicacion',
                'class' => 'shortcut-dashboard',
            ),
            array(
                'label' => 'Contactos',
                'route' => 'administration/contactos',
                'class' => 'shortcut-contacts',
            ),
            array(
                'label' => 'Mensajes',
                'route' => 'administration/mensajes',
                'class' => 'shortcut-messages',
            ),
            array(
                'label' => 'Agenda',
                'route' => 'administration/agenda',
                'class' => 'shortcut-agenda',
            ),
            array(
                'label' => 'Media',
                'route' => 'administration/media',
                'class' => 'shortcut-medias',
            ),
            array(
                'label' => 'Estadísticas',
                'route' => 'administration/estadisticas',
                'class' => 'shortcut-stats',
            ),
            array(
                'label' => 'Notas',
                'route' => 'administration/notas',
                'class' => 'shortcut-notes',
            ),
            array(
                'label' => 'Configuración',
                'route' => 'administration/configuracion',
                'class' => 'shortcut-settings',
                'last' => true,
            ),
        ),
        'opciones' => array(
            array(
                'label' => 'Notificaciones',
                'route' => 'administration/notificaciones',
                'class' => 'icon-inbox',
                'count' => 2,
            ),
            array(
                'label' => 'Calendario',
                'route' => 'administration/calendario',
                'class' => 'icon-calendar',
                'count' => 410,
            ),
            array(
                'label' => 'Mi Cuenta',
                'route' => 'administration/perfil',
                'class' => 'icon-user',
                'count' => 410,
            ),
            array(
                'label' => 'Opciones',
                'route' => 'administration/opciones',
                'class' => 'icon-gear',
            ),
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'administration/layout' => __DIR__ . '/../view/layout/layout.phtml',
        ),
        'template_path_stack' => array(
            'administration' => __DIR__ . '/../view',
        ),
    ),
);
