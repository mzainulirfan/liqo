<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('/', static function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');
});
