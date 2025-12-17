<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public routes
$routes->get('/', 'Home::index');
$routes->get('auth/login', 'AuthController::login');
$routes->post('auth/login', 'AuthController::login');
$routes->get('auth/logout', 'AuthController::logout');

// Protected employee routes
$routes->group('employees', ['filter' => 'auth'], function($routes) {
    $routes->get('', 'EmployeesController::index');
    $routes->get('/', 'EmployeesController::index');
    $routes->get('create', 'EmployeesController::create');
    $routes->post('create', 'EmployeesController::create');
    $routes->get('edit/(:num)', 'EmployeesController::edit/$1');
    $routes->post('edit/(:num)', 'EmployeesController::edit/$1');
    $routes->get('delete/(:num)', 'EmployeesController::delete/$1');
});

// Fallback for /employees
$routes->get('employees', 'EmployeesController::index', ['filter' => 'auth']);