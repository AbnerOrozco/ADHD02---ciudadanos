<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Regiones::regiones');
$routes->get('/ver_regiones', 'Regiones::regiones');
$routes->get('/ver_departamentos','Departamentos::departamentos');
$routes->get('/ver_municipio','Municipios::Municipios');
$routes->get('/ver_NivelesAcademicos','NivelesAcademicos::NivelesAcademicos');
$routes->get('/ver_Ciudadanos','Ciudadanos::Ciudadanos');