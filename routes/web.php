<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// routes system
$routes = new RouteCollection();

$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method' => 'showAction'), array('id' => '[0-9]+')));

$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'HomepageController', 'method' => 'index'), array()));
