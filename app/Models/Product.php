<?php

namespace App\Models;

use App\Database;

class Product {
    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $sku;
    protected $image;

    // GET METHODS

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    // SET METHODS

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    // CRUD OPERATIONS
    public function create(array $data) {
        //
    }

//    public function read(int $id) {
//        $connection = Database::getConnection();
//        $result = mysqli_query($connection, "SELECT * FROM products WHERE id = '{$id}'");
//        return $result;
//    }

    // TEST function, function above needs Database connection!
    public function read(int $id)
    {
        $this->title = 'My first Product';
        $this->description = 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ';
        $this->price = 2.56;
        $this->sku = 'MVC-SP-PHP-01';
        $this->image = 'https://via.placeholder.com/150';

        return $this;
    }

    public function update(int $id, array $data) {
        //
    }

    public function delete(int $id) {
        //
    }

    public function getProductByPrice(int $price) {

    }
}
