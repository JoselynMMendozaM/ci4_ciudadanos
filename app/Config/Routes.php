<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_regiones', 'Regiones::index');
$routes->get('ver_depto', 'Departamentos::index');
$routes->get('ver_muni', 'Municipios::index');
$routes->get('ver_ciudadanos', 'Ciudadanos::index');
$routes->get('ver_nivelesacad', 'NivelesAcademicos::index');