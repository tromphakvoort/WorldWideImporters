<?php

namespace App\Controllers;

use App\Models\Categories;
use Symfony\Component\Routing\RouteCollection;

class CategoryController
{
  public function showAction(int $id, RouteCollection $routes)
  {
      $category = Categories();
      $category->read($id + 1);

    require_once APP_ROOT . '/views/categories.php';
  }
}
