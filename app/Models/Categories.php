<?php

namespace App\Models;

use App\Database;

class Categories
{

    protected int $id;
    protected string $category_name;
    protected int $created_at;
    protected int $updated_at;

    //crud OPERATIONS
    public function read(int $id): string
    {

        //database connection
        $connection = Database::getConnection();

        $result = mysqli_query($connection, "SELECT * from categories C JOIN productcategories PC ON PC.fk_prodcat_cat_id = C.id JOIN product P ON PC.fk_prodcat_product_id = P.id WHERE id = '$id'");

        if (mysqli_num_rows($result) === 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $this->getCategoryName($row['category_name']);
            }

        }

        return $this->category_name;

       }

    /**
     * @return mixed
     */

    public function getCategoryName(): mixed

    {
        return $this->category_name;
    }
}
