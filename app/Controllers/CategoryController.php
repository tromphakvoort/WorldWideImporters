<?php

namespace App\Controllers;

use App\Models\Categories;
use Symfony\Component\Routing\RouteCollection;

class CategoryController
{
  public function showAction(int $id, RouteCollection $routes)
  {

    require_once APP_ROOT . '/views/categories.php';
  }
}
