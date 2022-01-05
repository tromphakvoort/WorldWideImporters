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

// Category1 page route
$routes->add('category1', new Route(constant('URL_SUBFOLDER') . '/category1', array('controller' => 'StaticPageController', 'method' => 'category1Page'), array()));

// Login page route
$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'LoginController', 'method' => 'loginPage'), array()));

//category page route
$routes->add('category', new Route(constant('URL_SUBFOLDER') . '/category/{id}', array('controller'=> 'CategoryController', 'method' => 'ShowAction'), array('id' => '[0-9]+')));
