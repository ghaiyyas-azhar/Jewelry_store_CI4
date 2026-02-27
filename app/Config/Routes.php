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

    // DASHBOARD
    $routes->get('/', 'Dashboard::index');
    $routes->get('mark-collected/(:num)', 'Dashboard::markCollected/$1');

    // INVENTORY
    $routes->get('inventory', 'Inventory::index');
    $routes->get('inventory/create', 'Inventory::create');
    $routes->post('inventory/store', 'Inventory::store');
    $routes->get('inventory/edit/(:num)', 'Inventory::edit/$1');
    $routes->post('inventory/update/(:num)', 'Inventory::update/$1');
    $routes->get('inventory/delete/(:num)', 'Inventory::delete/$1');

    // COLLECTIONS
    $routes->get('collections', 'CollectionController::index');
    $routes->get('collections/create', 'CollectionController::create');
    $routes->post('collections/store', 'CollectionController::store');
    $routes->get('collections/edit/(:num)', 'CollectionController::edit/$1');
    $routes->post('collections/update/(:num)', 'CollectionController::update/$1');
    $routes->get('collections/delete/(:num)', 'CollectionController::delete/$1');

    // PICKUPS
    $routes->get('pickups', 'PickupController::index');
    $routes->post('pickups/approve/(:num)', 'PickupController::approve/$1');
    $routes->post('pickups/decline/(:num)', 'PickupController::decline/$1');
    $routes->post('pickups/collected/(:num)', 'PickupController::markCollected/$1');

    // APPOINTMENTS
    $routes->get('appointments', 'PickupController::index');
    $routes->get('appointments/collect/(:num)', 'PickupController::markCollected/$1');
   
    // CLIENTS
    $routes->get('clients', 'ClientController::index');
    $routes->get('clients/edit/(:num)', 'ClientController::edit/$1');
    $routes->post('clients/update/(:num)', 'ClientController::update/$1');
    $routes->get('clients/toggle-status/(:num)', 'ClientController::toggleStatus/$1');
    $routes->get('clients/delete/(:num)', 'ClientController::delete/$1');
    
    // BOUTIQUES
    $routes->get('boutiques', 'BoutiqueController::index');
    $routes->get('boutiques/create', 'BoutiqueController::create');
    $routes->post('boutiques/store', 'BoutiqueController::store');
    $routes->get('boutiques/edit/(:num)', 'BoutiqueController::edit/$1');
    $routes->post('boutiques/update/(:num)', 'BoutiqueController::update/$1');
    $routes->get('boutiques/delete/(:num)', 'BoutiqueController::delete/$1');

    // ADMIN LOGOUT
    $routes->get('logout', 'Dashboard::logout');
});