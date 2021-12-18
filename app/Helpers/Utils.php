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
}
