<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/** 
 * @var Pages $routes
*/
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

$routes->get('figurines', [Figurine::class, 'index']);
$routes->get('figurines/nouvelle', [Figurine::class, 'new']);