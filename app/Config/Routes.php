<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/jobs', 'JobController::index');

$routes->get('/job/post-job', 'PostjobController::index');


$routes->get('/job/job-list', 'JoblistController::index');
$routes->get('/api/fetch-jobs', 'JoblistController::fetchJobs'); 
$routes->post('/api/search-jobs', 'JoblistController::searchJobs');


$routes->get('/job/login', 'LoginController::index');
$routes->get('/job/signup', 'LoginController::signup');





$routes->post('/api/users', 'LoginController::createUser'); 
$routes->get('/api/users', 'LoginController::getUsers');   


$routes->post('/job/store', 'PostjobController::store');
$routes->get('/jobs/fetchJobs', 'PostjobController::fetchJobs');

$routes->get('/job/job-single', 'SinglejobController::display');
// $routes->get('/job/job-single/(:num)', 'SinglejobController::single/$1');
$routes->get('/job/singleApi/(:num)', 'SinglejobController::singleApi/$1');




 $routes->get('/job/jobapply', 'JobapplyController::display');
$routes->post('jobapply/applyJob', 'JobapplyController::applyJob');

$routes->get('/jobs', 'JobController::display');
$routes->get('/jobs/dispaly', 'JobController::dispaly'); 

$routes->get('/jobs', 'PostjobController::joblist');


$routes->post('/api/login', 'LoginController::login'); 