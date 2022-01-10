<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController {
    // Show the product attributes based on the id
    public function showAction (int $id, RouteCollection $routes) {
        $product = new Product();
        $product->read($id  );

        require_once APP_ROOT . '/views/product.php';
    }

    public function addToCart(RouteCollection $routes) {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["product-id"])) {
                // Get product id from post
                $productId = $_POST['product-id'];

                // Make new instance of Product
                $product = new Product();
                // Get the product from the database
                $product->read($productId);

                // Check if there is a session already started
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                // Check if there is a cart array in the session
                if(!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = array();
                }

                // Push the new product to the cart in session
                array_push($_SESSION["cart"], $product);
            } else {
                die("No product id was found 😢");
            }
        }
    }
}
