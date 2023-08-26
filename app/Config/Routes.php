<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Router;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->group('users', function ($routes) {
    $routes->get('/', 'Users::index');
    $routes->get('create', 'Users::create');
    $routes->get('(:any)/edit', 'Users::edit/$1');
    $routes->get('(:any)', 'Users::detail/$1');
    $routes->post('save', 'Users::save');
    $routes->post('update/(:any)', 'Users::update/$1');
    $routes->delete('(:num)', 'Users::delete/$1');
});
