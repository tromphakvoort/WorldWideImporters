<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Categories;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
    public function indexAction(RouteCollection $routes) {
        $routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());
        &&
        $routeToCategory = str_replace('{id}', 1, $routes->get('Categories')->getPath());


        require_once APP_ROOT . '/views/home.php';
    }
}
