<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController {
    // Show the product attributes based on the id
    public function showAction (int $id, RouteCollection $routes) {
        echo '<pre>';
        $newProduct = new Product();
        $newProduct->read($id);
        $newProduct->setId($newProduct->getId() + 1);
        Product::create($newProduct);

        require_once APP_ROOT . '/views/product.php';
    }
}
