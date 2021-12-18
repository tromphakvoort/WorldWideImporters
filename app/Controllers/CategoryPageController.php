<?php

namespace App\Controllers;

use App\Models\Categories;
use Symfony\Component\Routing\RouteCollection;

class CategoryPageController
{
    // Homepage action
    public function indexAction(RouteCollection $routes) {
        $routeToCategory = str_replace('{id}', 1, $routes->get('category_name')->getPath());

        require_once APP_ROOT . '/views/home.php';
    }
}
