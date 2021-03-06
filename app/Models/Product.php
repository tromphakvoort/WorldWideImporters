<?php

namespace App\Models;

use App\Database;
use App\Helpers\Utils;

class Product
{

    protected ?int $id;
    protected string $product_name;
    protected string $description;
    protected int $stock;
    protected int $price_amount;
    protected string $price_currency;
    protected int $price_precision;
    protected int $created_at;
    protected int $updated_at;

    // CRUD OPERATIONS
    public static function create(Product $product)
    {
        // Get database connection
        $connection = Database::getConnection();

        // Insert product query
        $sql = "INSERT INTO products (
                     id,
                     product_name,
                     description,
                     stock,
                     price_amount,
                     price_currency,
                     price_precision
                 ) VALUES (
                           '$product->id',
                           '$product->product_name',
                           '$product->description',
                           '$product->stock',
                           '$product->price_amount',
                           '$product->price_currency',
                           '$product->price_precision'
                       )";

        // Run query
        $query = mysqli_query($connection, $sql);

        if(!$query) echo mysqli_error($connection);
    }

    public function read(int $id) : Product
    {
        // Get database connection
        $connection = Database::getConnection();

        // Get product from database
        $result = mysqli_query($connection, "SELECT * FROM products WHERE id = '$id'");

        if (mysqli_num_rows($result) === 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $this->setId($row['id']);
                $this->setProductName($row['product_name']);
                $this->setDescription($row['description']);
                $this->setPriceAmount($row['price_amount']);
                $this->setStock($row['stock']);
                $this->setPriceCurrency($row['price_currency']);
                $this->setPricePrecision($row['price_precision']);
            }

            return $this;
        }
        return new Product();
    }

    public static function update(int $id, array $data)
    {
        //
    }

    public static function delete(int $id)
    {
        //
    }

    public static function getProductByPrice(int $price)
    {

    }

    public static function getProducts(int $amount): array {
        // Database connection
        $connection = Database::getConnection();

        // Initialize empty array
        $products = [];
            $result = mysqli_query($connection, "SELECT p.id, product_name, description, price_amount, stock, price_currency, price_precision,    file_location, filename, mimetype FROM webshop_wwi.products p JOIN attachments a ON fk_att_product_id=p.id LIMIT $amount");

        if(mysqli_num_rows($result) > 0 ){
            return Utils::resultToArray($result);
        } else {
            die("No products found ????");
        }
    }

    public function getProductImages(int $productId): array {
        // Database connection
        $connection = Database::getConnection();

        // Initialize empty array
        $productImages = array();

        // Query images by product id
        $result = mysqli_query($connection, "SELECT id, file_location, filename, mimetype FROM webshop_wwi.attachments WHERE webshop_wwi.attachments.fk_att_product_id = $productId");

        if(mysqli_num_rows($result) > 0 ) {
            $productImages = Utils::resultToArray($result);

            $newProductImages = array();
            foreach ($productImages as $productImage) {
                $imageUrl = $productImage["file_location"] . $productImage["filename"] . $productImage["mimetype"];
                array_push($newProductImages, $imageUrl);
            }

            $productImages = $newProductImages;
        }

        return $productImages;
    }

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
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name): void
    {
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return mixed
     */
    public function getPriceAmount()
    {
        return $this->price_amount;
    }

    /**
     * @param mixed $price_amount
     */
    public function setPriceAmount($price_amount): void
    {
        $this->price_amount = $price_amount;
    }

    /**
     * @return string
     */
    public function getPriceCurrency(): string
    {
        return $this->price_currency;
    }

    /**
     * @param string $price_currency
     */
    public function setPriceCurrency(string $price_currency): void
    {
        $this->price_currency = $price_currency;
    }

    /**
     * @return int
     */
    public function getPricePrecision(): int
    {
        return $this->price_precision;
    }

    /**
     * @param int $price_precision
     */
    public function setPricePrecision(int $price_precision): void
    {
        $this->price_precision = $price_precision;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
