<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Router;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->group('/', static function ($routes) {
    $routes->get('users', 'Users::index');
    $routes->get('users/(:any)', 'Users::detail/$1');
});
