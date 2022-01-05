<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// routes system
$routes = new RouteCollection();

// GET routes
$httpCollection = new RouteCollection();

$httpCollection->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method' => 'indexAction'), array()));
$httpCollection->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method' => 'showAction'), array('id' => '[0-9]+')));

// AUTHENTICATION ROUTES
$httpCollection->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'Authentication\LoginController', 'method' => 'index'), array()));
$httpCollection->add('register', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'Authentication\RegisterController', 'method' => 'index'), array()));

// Set all routes to get method
$httpCollection->setMethods(array('GET'));

// POST methods
$postCollection = new RouteCollection();

$postCollection->add('registerPOST', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'Authentication\RegisterController', 'method' => 'register'), array()));


// set all routes to post method
$postCollection->setMethods(array('POST'));

// Add collections to main route collection
$routes->addCollection($httpCollection);
$routes->addCollection($postCollection);
