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
    $routes->post('/', 'Users::index');
    $routes->post('save', 'Users::save');
    $routes->post('update/(:any)', 'Users::update/$1');
    $routes->delete('(:num)', 'Users::delete/$1');
});
$routes->group('roles', function ($routes) {
    $routes->get('/', 'Roles::index');
    $routes->get('create', 'Roles::create');
    $routes->get('(:any)', 'Roles::detail/$1');
    $routes->post('save', 'Roles::save');
    $routes->post('update', 'Roles::update');
});
$routes->group('schedule', function ($routes) {
    $routes->get('/', 'Schedule::index');
    $routes->get('create', 'Schedule::create');
});
$routes->group('groups', function ($routes) {
    $routes->get('/', 'Groups::index');
    $routes->get('create', 'Groups::create');
    $routes->get('(:any)/edit', 'Groups::edit/$1');
    $routes->get('(:any)', 'Groups::detail/$1');
    $routes->post('/', 'Groups::index');
    $routes->post('save', 'Groups::save');
    $routes->post('update/(:any)', 'Groups::update/$1');
    $routes->delete('(:num)', 'Groups::delete/$1');
});
