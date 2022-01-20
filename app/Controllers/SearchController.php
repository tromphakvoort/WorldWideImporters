<?php

namespace App\Controllers;

use App\Database;
use App\Helpers\Utils;
use Symfony\Component\Routing\RouteCollection;

class SearchController
{
    public function index(RouteCollection $routes)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["searchQuery"]) && strlen($_POST["searchQuery"]) > 0) {
                $searchQuery = $_POST["searchQuery"];
                $results = $this->search($searchQuery);

                if(count($results) <= 0) {
                    $error = "Geen resultaten gevonden 0️⃣";
                }
            } else {
                die("No search query found 😢");
            }
        } else {
            die($_SERVER["REQUEST_METHOD"] . "is not a valid method for this route ❌");
        }

        require_once APP_ROOT . '/views/searchresults.php';
    }

    private function search(string $param): array
    {
        // Database connection
        $connection = Database::getConnection();

        // Run SQL query
        $result = mysqli_query($connection, "SELECT * FROM webshop_wwi.products WHERE product_name LIKE '%$param%' OR description LIKE '%$param%'");

        if(mysqli_num_rows($result) > 0 ){
            return Utils::resultToArray($result);
        } else {
            return array();
        }
    }
}
