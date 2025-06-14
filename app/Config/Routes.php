<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/conexion', 'Conexion::show');

//Rutas de registro y login
$routes->get('/login', 'Login::index');
$routes->post('/login/acceder','Login::verificar');
$routes->get('/registro', 'Login::registrar');
$routes->get('/password', 'Password::index');
$routes->post('/login/guardarUsuario','Login::guardar');
$routes->get('/salir','Login::salir');



//Rutas Administrador
$routes->get('/Administrador', 'Administrador::index');
$routes->get('/Administrador/clientes', 'Administrador::clientes');
$routes->get('/Administrador/clientes/editar/(:num)','Administrador::editarCliente/$1');

//Rutas Usuarios
$routes->get('/usuarios','Usuarios::index');
$routes->get('/usuarios/crear','Usuarios::crear');
$routes->post('/usuarios/guardar','Usuarios::guardar');
$routes->get('/usuarios/editar/(:num)','Usuarios::editar/$1');
$routes->get('/usuarios/eliminar/(:num)','Usuarios::eliminar/$1');
$routes->post('/usuarios/actualizar/(:num)','Usuarios::actualizar/$1');

//Rutas Suscripciones
$routes->get('/suscripciones','Suscripciones::index');
$routes->get('/suscripciones/crear','Suscripciones::crear');
$routes->post('/suscripciones/guardar','Suscripciones::guardar');
$routes->get('/suscripciones/editar/(:num)','Suscripciones::editar/$1');
$routes->get('/suscripciones/eliminar/(:num)','Suscripciones::eliminar/$1');
$routes->post('/suscripciones/actualizar/(:num)','Suscripciones::actualizar/$1');



?>

