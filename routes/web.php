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

// Category1 page route
$routes->add('category1', new Route(constant('URL_SUBFOLDER') . '/category1', array('controller' => 'StaticPageController', 'method' => 'category1Page'), array()));

// Category2 page route
$routes->add('category2', new Route(constant('URL_SUBFOLDER') . '/category2', array('controller' => 'StaticPageController', 'method' => 'category2Page'), array()));

// Category3 page route
$routes->add('category3', new Route(constant('URL_SUBFOLDER') . '/category3', array('controller' => 'StaticPageController', 'method' => 'category3Page'), array()));

// Login page route
$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'LoginController', 'method' => 'loginPage'), array()));

// category page route
$routes->add('category', new Route(constant('URL_SUBFOLDER') . '/category/{id}', array('controller'=> 'CategoryController', 'method' => 'ShowAction'), array('id' => '[0-9]+')));

// cart page route
$routes->add('cart', new Route(constant('URL_SUBFOLDER') . '/cart', array('controller' => 'StaticPageController', 'method' => 'cartPage'), array()));

// Product page route
$httpCollection->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method' => 'showAction'), array('id' => '[0-9]+')));

// AUTHENTICATION ROUTES
$httpCollection->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'Authentication\LoginController', 'method' => 'index'), array()));
$httpCollection->add('register', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'Authentication\RegisterController', 'method' => 'index'), array()));

// Place order page
$httpCollection->add('placeOrder', new Route(constant('URL_SUBFOLDER') . '/placeOrder', array('controller' => 'StaticPageController', 'method' => 'placeOrderPage'), array()));

// Set all routes to GET method
$httpCollection->setMethods(array('GET'));

// POST methods
$postCollection = new RouteCollection();

// AUTHENTICATION ROUTES
$postCollection->add('registerPOST', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'Authentication\RegisterController', 'method' => 'register'), array()));
$postCollection->add('loginPOST', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'Authentication\LoginController', 'method' => 'authenticate'), array()));
$postCollection->add('logout', new Route(constant('URL_SUBFOLDER') . '/logout', array('controller' => 'Authentication\LoginController', 'method' => 'logout'), array()));

// SHOPPINGCART ROUTES
$postCollection->add('addToCart', new Route(constant('URL_SUBFOLDER') . '/addToCart', array('controller' => 'ProductController', 'method' => 'addToCart'), array()));
$postCollection->add('removeFromCart', new Route(constant('URL_SUBFOLDER') . '/removeFromCart', array('controller' => 'ShoppingCartController', 'method' => 'removeFromShoppingCart'), array()));

// Search results
$postCollection->add('searchResults', new Route(constant('URL_SUBFOLDER') . '/searchResults', array('controller' => 'SearchController', 'method' => 'index'), array()));

// set all routes to POST method
$postCollection->setMethods(array('POST'));

// Add collections to main route collection
$routes->addCollection($httpCollection);
$routes->addCollection($postCollection);
