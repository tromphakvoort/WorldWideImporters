<?php

phpnamespace App\Models;

use App\Database;

class categories
{

  protected int $id;
  protected string $category_name;
  protected int $created_at;
  protected int $updated_at;
{
  //crud OPERATIONS
  public function read(int $id) : category_name

  //database connection
  $connection = Database::getConnection();

  $result = mysqli_query($connection, "SELECT * from categories WHERE ID = '$id'");

  if (mysqli_num_rows($result) === 1) {
    while ($row = mysqli_fetch_assoc($result)){
      $this->setCategoryName($row['category_name']);
    }

    return $this;
  }
  return new $category_name();



    }
  }
}
}