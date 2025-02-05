<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/kebutuhan', 'Home::kebutuhan');
$routes->get('/apresiasi', 'Home::apresiasi');
$routes->post('/daftar', 'Home::daftar');
