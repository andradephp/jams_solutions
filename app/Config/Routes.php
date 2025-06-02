<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/conexion', 'Conexion::show');
$routes->get('/login', 'Login::index');
$routes->get('/registro', 'Register::show');
$routes->get('/password', 'Password::index');

