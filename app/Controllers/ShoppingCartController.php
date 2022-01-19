<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class ShoppingCartController
{
    public function removeFromShoppingCart(RouteCollection $routes) {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["product-id"])) {
                // Get product id from post
                $productId = $_POST['product-id'];

                // Check if there is a session already started
                if (session_status() == PHP_SESSION_NONE && isset($_SESSION['cart'])) {
                    die("No session was started or there aren't any products in your shopping cart 😢");
                }

                // Check if there is a cart array in the session
                if(!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $product) {
                        if($product->getId() == $productId) {
                            unset($_SESSION['cart'][$key]);
                            break;
                        }
                    }
                }
                else {
                    die("There aren't any products in your shopping cart 🛒");
                }

                header('location: cart');
            } else {
                die("No product id was found 😢");
            }
        }
    }
}
