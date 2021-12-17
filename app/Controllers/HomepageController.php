<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class HomepageController
{
    // Homepage action
    public function index(RouteCollection $routes) {
        // URL to product with id of 1 🥇
        $routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());

        $products = $this->getProducts();

        // Require homepage view
        require_once APP_ROOT . '/views/home.php';
    }

    // Get products for the homepage
    private function getProducts() : array {
        // Initialize empty array
        $products = Product::getProducts(5);

        if(count($products) > 0) {
            return $products;
        } else {
            die("Geen producten gevonden 😢");
        }
    }
}
