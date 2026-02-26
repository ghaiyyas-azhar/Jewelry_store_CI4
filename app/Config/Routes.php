<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ================= PUBLIC =================

$routes->get('/', 'Home::index');

$routes->get('collections', 'Collection::index');

// PRODUCT
$routes->get('products', 'Product::index');
$routes->get('product/(:segment)', 'Product::detail/$1');

// PICKUP CUSTOMER
$routes->get('pickup', 'Pickup::index');
$routes->get('success', 'Success::index');


// ================= AUTH =================

$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::loginProcess');

$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::registerProcess');

$routes->get('logout', 'Auth::logout');

// ================= USER AREA =================

$routes->group('', function($routes) {

    $routes->get('profile', 'User::profile');
    $routes->get('payment-method', 'User::paymentMethod');
    $routes->get('purchases', 'User::purchases');
    $routes->get('purchase-history', 'User::purchaseHistory');

});


// ================= ADMIN AREA =================

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {

    $routes->get('/', 'Dashboard::index');

    $routes->get('inventory', 'Inventory::index');
    $routes->get('pickups', 'PickupController::index');
    $routes->get('appointments', 'AppointmentController::index');
    $routes->get('clients', 'ClientController::index');
    

    // COLLECTION CRUD
    $routes->get('collections', 'CollectionController::index');
    $routes->get('collections/create', 'CollectionController::create');
    $routes->post('collections/store', 'CollectionController::store');
    $routes->get('collections/edit/(:num)', 'CollectionController::edit/$1');
    $routes->post('collections/update/(:num)', 'CollectionController::update/$1');
    $routes->get('collections/delete/(:num)', 'CollectionController::delete/$1');

    // INVENTORY CRUD
    $routes->get('inventory', 'Inventory::index');
$routes->get('inventory/create', 'Inventory::create');
$routes->post('inventory/store', 'Inventory::store');

$routes->get('inventory/edit/(:num)', 'Inventory::edit/$1');
$routes->post('inventory/update/(:num)', 'Inventory::update/$1');
$routes->get('inventory/delete/(:num)', 'Inventory::delete/$1');

    // ACTION BUTTONS
    $routes->post('pickups/approve/(:num)', 'PickupController::approve/$1');
    $routes->post('pickups/decline/(:num)', 'PickupController::decline/$1');
    $routes->post('pickups/collected/(:num)', 'PickupController::markCollected/$1');

});