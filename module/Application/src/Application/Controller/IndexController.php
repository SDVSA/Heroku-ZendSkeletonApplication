<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        $apps = array(
            'admin' => array(
                'Administrador Integrado',
                'Esta plataforma está diseñada para que pueda administrar todos los módulos a los que tiene acceso',
                '#20603D'
            ),
            'unitaxi' => array(
                'Sistema de Servicio de Taxi',
                'Esta plataforma está diseñada para administrar servicios de taxi, flotas, horarios, rutas y monitoreo de vehículos',
                '#102C54'
            ),
            'vacante' => array(
                'Sistema de Recursos Humanos',
                'Esta Plataforma está diseñada para la administración del personal, cálculo de salarios, prestaciones sociales, horarios, postulaciones',
                '#4A192C'
            ),
            'vitae' => array(
                'Sistema de Cuenta Individual',
                'En esta área usted podrá administrar su cuenta individual, y los servicios que disponemos para su uso personal',
                '#CB2821'
            ),
            'administrativo' => array(
                'Sistema Administrativo',
                'Este sistema le proporciona las herramientas adecuadas para Planeación de la Producción, Compras, Control de Inventarios, Ventas, CRM, Bancos, Cuentas por Cobrar, Cuentas por Pagar, Contabilidad General, Reportes Financieros y Operativos, entre otros',
                '#633A34'
            ),
            'contaduria' => array(
                'Sistema de Contaduría',
                'Este sistema está enfocado en las áreas operativas, financiera y contable de la empresa que cumplen con la función específica que un departamento o área de la empresa demanda,  como lo es facturar, cobrar o llevar contabilidad.',
                '#763C28'
            ),
            'proyectos' => array(
                'Administrador de Proyectos',
                'Este sistema ha sido diseñado para la planificación de proyectos, manejo y control de presupuesto, asignación de recursos, software para colaboración, software para comunicación, manejo de la calidad y documentación.',
                '#0A0A0A'
            ),
            'soporte' => array(
                'Sistema de Gestión de Servicios',
                'Este sistema está desarrollado para la administración de servicios específicos',
                '#332F2C'
            ),
            'hoteles' => array(
                'Sistema de Hoteles',
                'En el sistema de administración de hoteles usted podrá administrar disponibilidad, las habitaciones, los servicios adicionales etc.',
                '#231A24'
            ),
            'restaurant' => array(
                'Sistema de Restaurantes',
                'A través del sistema de restaurantes usted podrá administrar los pedidos, las mesas, menús, presentaciones en vivo, entre otros.',
                '#412227'
            )
        );
        $orgs = array(
            'coderic' => 'Coderic, S.A.',
            'viajandoalosroques' => 'Viajando a Los Roques, C.A.',
            'natuga' => 'Villas Paraiso Tropical S.A.',
            'sistravel' => 'SISTravel C.A.',
            'intergrafica' => 'Inversiones Portal Gráfico, C.A.',
            'tecnicservicelm' => 'Tecnic Service LM, C.A.',
            'orbitrans' => 'OrbiTrans, C.A.',
        );
        return new ViewModel(array(
            'app' => $apps,
            'org' => $orgs
        ));
    }

    public function aboutAction() {
        return new ViewModel();
    }

    public function contactoAction() {
        return new ViewModel();
    }

    public function ayudaAction() {
        return new ViewModel();
    }

}
