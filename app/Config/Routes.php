<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('menu', 'Home::index');
$routes->get('/ver_regiones', 'Regiones::regiones');
$routes->get('/ver_departamentos','Departamentos::departamentos');
$routes->get('/ver_municipio','Municipios::Municipios');
$routes->get('/ver_NivelesAcademicos','NivelesAcademicos::NivelesAcademicos');
$routes->get('/ver_Ciudadanos','Ciudadanos::Ciudadanos');


$routes->get('/editar_region/(:num)', 'regionesController::editarregion/$1');
$routes->post('/actualizar_region', 'regionesController::actualizarregion');
$routes->get('/eliminar_region/(:num)', 'regionesController::eliminarregion/$1');v