<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/collections', 'Collection::index');

// PRODUCT
$routes->get('/products', 'Product::index'); // list
$routes->get('/product/(:segment)', 'Product::detail/$1'); // detail

// PICKUP CUSTOMER
$routes->get('/pickup', 'Pickup::index');
$routes->get('/success', 'Success::index');

// LOGIN UNTUK USER
$routes->get('/login', 'Auth::login');
$routes->post('/loginProcess', 'Auth::loginProcess');

$routes->get('/register', 'Auth::register');
$routes->post('/registerProcess', 'Auth::registerProcess');

$routes->get('/logout', 'Auth::logout');



// ================= ADMIN AREA =================
$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {

    $routes->get('/', 'Dashboard::index');

    $routes->get('inventory', 'Inventory::index');
    $routes->get('pickups', 'PickupController::index');
    $routes->get('appointments', 'AppointmentController::index');
    $routes->get('clients', 'ClientController::index');

    // ACTION BUTTONS
    $routes->post('pickups/approve/(:num)', 'PickupController::approve/$1');
    $routes->post('pickups/decline/(:num)', 'PickupController::decline/$1');
    $routes->post('pickups/collected/(:num)', 'PickupController::markCollected/$1');
});