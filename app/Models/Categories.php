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
    public function read(int $id): Categories
    {

        //database connection
        $connection = Database::getConnection();

        $result = mysqli_query($connection, "SELECT * from categories WHERE id = '$id'");

        if (mysqli_num_rows($result) === 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $this->getcategoryname($row['category_name']);
            }

            return $this;
        }
        return new $category_name();


    }

    /**
     * @return mixed
     */

    public function getcategoryname()
    {
        return $this->category_name;
    }
}
