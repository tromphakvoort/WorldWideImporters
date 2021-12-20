<?php

namespace App\Models;

use App\Database;

class Categories
{


    var string $category_name;
    var int $id;
    var int $created_at;
    var int $updated_at;

    //crud OPERATIONS
    public function read(int $id) : Categories
    {

        //database connection
        $connection = Database::getConnection();

        $result = mysqli_query($connection, "SELECT * from categories WHERE id = '$id'");

        if (mysqli_num_rows($result) === 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $this->setId($row['id']);
                $this->setcategoryname($row['category_name']);

            }

            return $this;
        }
        return new Categories();
    }

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->category_name;
    }

    /**
     * @param string $category_name
     */
    public function setCategoryName(string $category_name): void
    {
        $this->category_name = $category_name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
