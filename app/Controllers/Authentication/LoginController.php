<?php

namespace App\Controllers\Authentication;

use Symfony\Component\Routing\RouteCollection;
use const APP_ROOT;

class LoginController
{
    public function index(RouteCollection $routes) {
        require_once APP_ROOT . '/views/authentication/login.php';
    }
}
