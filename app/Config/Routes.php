<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');
$routes->get('/forgot', 'Home::forgot');
$routes->get('/register', 'Home::register');
