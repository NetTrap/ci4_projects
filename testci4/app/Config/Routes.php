<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/contact', 'Pages::contact');
$routes->get('/komik', 'Komik::index');
$routes->get('/komik/(:segment)', 'Komik::detail/$1');
//$routes->setAutoRoute(true);