<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/search-boutique', 'Home::searchBoutique');
$routes->post('/subscribe', 'Home::subscribe');
$routes->get('/products', 'Product::index');
$routes->get('/pickup', 'Pickup::index');
$routes->get('/success', 'Success::index');
$routes->get('/admin', 'Admin\Dashboard::index');
$routes->get('/admin/inventory', 'Admin\Inventory::index');