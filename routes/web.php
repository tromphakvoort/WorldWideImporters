<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// routes system
$routes = new RouteCollection();

// GET routes
$httpCollection = new RouteCollection();
$httpCollection->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method' => 'showAction'), array('id' => '[0-9]+')));
$httpCollection->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method' => 'indexAction'), array()));

// Set all routes to get method
$httpCollection->setMethods(array('GET'));

// POST methods
$postCollection = new RouteCollection();

// set all routes to post method
$postCollection->setMethods(array('POST'));

// Add collections to main route collection
$routes->addCollection($httpCollection);
$routes->addCollection($postCollection);
