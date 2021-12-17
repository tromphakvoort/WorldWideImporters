<?php

namespace App;

// Singleton Class to initiate database connection once 💿
class Database
{
    private static $db;
    private $connection;

    private function __construct()
    {
        $this->connection = mysqli_connect(10.10.1.3:, webserver, w7w71nekZiRSo5Vpwz5W, webshop_wwi) or die("Database connection not established.");
    }

    function __destruct()
    {
        $this->connection->close();
    }

    public static function getConnection()
    {
        if (self::$db == null) {
            self::$db = new Database();
        }
        return self::$db->connection;
    }
}
