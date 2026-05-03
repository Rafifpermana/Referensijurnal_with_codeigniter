<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Jurnal::index');

// rote crud
$routes->get('/jurnal', 'Jurnal::index');
$routes->get('/jurnal/create', 'Jurnal::create');
$routes->post('/jurnal/save', 'Jurnal::save');
$routes->get('/jurnal/delete/(:num)', 'Jurnal::delete/$1');
$routes->get('/jurnal/edit/(:num)', 'Jurnal::edit/$1');
$routes->post('/jurnal/update/(:num)', 'Jurnal::update/$1');
