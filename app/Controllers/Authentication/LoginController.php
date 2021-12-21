<?php

namespace App\Controllers\Authentication;

class LoginController
{
  public function loginPage(RouteCollection $routes) {
      require_once APP_ROOT . '/views/login.php';
}
}
