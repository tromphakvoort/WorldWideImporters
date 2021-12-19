<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// routes system
$routes = new RouteCollection();

$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method' => 'showAction'), array('id' => '[0-9]+')));

// Home page route
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'HomepageController', 'method' => 'index'), array()));

// Contact page route
$routes->add('contact', new Route(constant('URL_SUBFOLDER') . '/contact', array('controller' => 'StaticPageController', 'method' => 'contactPage'), array()));

// About page route
$routes->add('about', new Route(constant('URL_SUBFOLDER') . '/about', array('controller' => 'StaticPageController', 'method' => 'aboutPage'), array()));
