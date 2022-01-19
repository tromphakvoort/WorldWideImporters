<?php

namespace App\Helpers;

class Utils
{
    public static function resultToArray($result): array {
        $rows = array();
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public static function isLoggedIn(): bool {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
            return false;
        }

        if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
            return true;
        }
        return false;
    }
}
