<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/solutions', 'Solutions::index');
$routes->get('/products', 'Products::index');
$routes->get('/cloud-services', 'CloudServices::index');
$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');
$routes->post('/contact/submit', 'Contact::submit');
