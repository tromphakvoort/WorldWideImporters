<?php

namespace App\Controllers;

use App\Models\Categories;
use Symfony\Component\Routing\RouteCollection;

class CategoryController
{
  public function showAction(int $id, RouteCollection $routes)
  {
      $category_name = new Categories();
      $category_name->read($id + 1);



    require_once APP_ROOT . '/views/categories.php';
  }
}
