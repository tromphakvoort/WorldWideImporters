<?php

namespace App;

// Singleton Class to initiate database connection once 💿
class Database
{
    private static $db;
    private $connection;

    // Variables in config/config.php
    private function __construct()
    {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Database connection not established.");
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
