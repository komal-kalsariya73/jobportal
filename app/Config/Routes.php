<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/jobs', 'JobController::index');
$routes->get('/job/job-single', 'SinglejobController::index');
$routes->get('/job/post-job', 'PostjobController::index');
$routes->get('/job/job-list', 'JoblistController::index');
$routes->get('/job/login', 'LoginController::index');
$routes->get('/job/signup', 'LoginController::signup');





$routes->post('/api/users', 'LoginController::createUser'); 
$routes->post('/api/login', 'LoginController::login'); 