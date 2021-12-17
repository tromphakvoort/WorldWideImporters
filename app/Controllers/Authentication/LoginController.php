<?php

namespace App\Controllers\Authentication;

use Symfony\Component\Routing\RouteCollection;
use const APP_ROOT;

class LoginController
{
    public function index(RouteCollection $routes) {
        require_once APP_ROOT . '/views/authentication/login.php';
    }

    public function authenticate() {
        if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
            // TODO: Route to logged in page!
            header("location: welcome.php");
            exit();
        }

        $email = $password = "";
        $email_err = $password_err = $login_err = "";

        // Process data when form is submitted ✔
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            // Check if values are set
            if(empty(trim($_POST["email"]))) {
                $username_err = "Please enter email";
            } else {
                $username = trim($_POST["email"]);
            }

            if(empty(trim($_POST["password"]))) {
                $password_err = "Please enter password";
            } else {
                $password = trim($_POST["password"]);
            }
        }
    }
}
