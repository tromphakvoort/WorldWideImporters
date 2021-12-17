<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController {
    // Show the product attributes based on the id
    public function showAction (int $id, RouteCollection $routes) {
        // Initialize a new product object
        $newProduct = new Product();
        // Read the product from the database
        $newProduct->read($id);
        // Update the product id to be one higher
        // TODO: Update the database to auto increment id's
        $newProduct->setId($newProduct->getId() + 1);
        // Create a new product
        Product::create($newProduct);

        // Get the new product from the database for the frontend
        $product = new Product();
        $product->read($id + 1);

        require_once APP_ROOT . '/views/product.php';
    }
}
