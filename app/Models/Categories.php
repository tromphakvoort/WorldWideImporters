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

        $result = mysqli_query($connection, "SELECT * from categories LEFT JOIN  WHERE id = '$id'");

        if (mysqli_num_rows($result) === 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $this->setId($row['id']);
                $this->setCategoryName($row['category_name']);
            }

            return $this;
        }
        return new Categories();
    }
    public static function getCategories(int $amount): array {
        // Database connection
        $connection = Database::getConnection();

        // Initialize empty array
        $categories = [];

        $result = mysqli_query($connection, "SELECT * FROM categories LIMIT $amount");

        if(mysqli_num_rows($result) > 0 ){
            $rows = Utils::resultToArray($result);
            foreach ($rows as $row) {
                $category_name = new Categories();

                $category_name->setId($row['id']);
                $category_name->setCategoryName($row['product_name']);

                array_push($categories, $category_name);
            }
        } else {
            die("No categories found 😢");
        }

        return $categories;
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
