<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// routes system
$routes = new RouteCollection();

// GET routes
$httpCollection = new RouteCollection();

// Home page route
$httpCollection->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'HomepageController', 'method' => 'index'), array()));

// Contact page route
$httpCollection->add('contact', new Route(constant('URL_SUBFOLDER') . '/contact', array('controller' => 'StaticPageController', 'method' => 'contactPage'), array()));

// About page route
$httpCollection->add('about', new Route(constant('URL_SUBFOLDER') . '/about', array('controller' => 'StaticPageController', 'method' => 'aboutPage'), array()));

// Product page route
$httpCollection->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method' => 'showAction'), array('id' => '[0-9]+')));

// AUTHENTICATION ROUTES
$httpCollection->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'Authentication\LoginController', 'method' => 'index'), array()));
$httpCollection->add('register', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'Authentication\RegisterController', 'method' => 'index'), array()));

// Set all routes to GET method
$httpCollection->setMethods(array('GET'));

// POST methods
$postCollection = new RouteCollection();

// AUTHENTICATION ROUTES
$postCollection->add('registerPOST', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'Authentication\RegisterController', 'method' => 'register'), array()));
$postCollection->add('loginPOST', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'Authentication\LoginController', 'method' => 'authenticate'), array()));

// set all routes to POST method
$postCollection->setMethods(array('POST'));

// Add collections to main route collection
$routes->addCollection($httpCollection);
$routes->addCollection($postCollection);
