<?php $title = "Winkelwagen | World Wide Importers";
include("../templates/header.php"); ?>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true) {
    header("location: /login");
    exit();
}

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

//mySQLi information
$db_host = "10.10.1.3";
$db_username = "admin";
$db_password = "Ayqy5ar988lFbefJ8wzo";

// db connection
$connection = mysqli_connect($db_host, $db_username, $db_password) or die("Error connecting to database" . mysqli_error());

// select DB
$db = mysqli_select_db($connection, "webshop_wwi") or die("Error connecting to database" . mysqli_error());

// AAN TE PASSEN
$results = mysqli_query($connection, "SELECT * FROM products ORDER BY id ASC");


?>
    <div class="container" style="width: 65%">
        <div style="clear: both"></div>
        <h3 class="title2">Winkelwagen</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product naam</th>
                <th width="10%">Aantal</th>
                <th width="13%">Prijs</th>
                <th width="10%">Totaal</th>
                <th width="17%">Verwijder product</th>
            </tr>
            <?php
                if(!empty($_SESSION["cart"])) {
                    $total = 0;
                    /*
                     * @var $product Product
                     */
                    foreach ($_SESSION["cart"] as $product) {
                        echo "
                <tr>
                    <td>" . $product->getProductName    () . "</td>
                    <td>1</td>
                    <td>" . round($product->getPriceAmount() / 100, $product->getPricePrecision()) . "</td>
                    <td>" . round($product->getPriceAmount() / 100, $product->getPricePrecision()) * 1 . "</td>
                    <td></td>
                </tr> ";

                    $total = $total + (round($product->getPriceAmount() / 100, $product->getPricePrecision()) * 1   );
                }
                echo "
                <tr>
                    <td colspan='3' align='right'>Totaal</td>
                    <th align='right'>$ " . number_format($total, 2) . "</th>
                    <td></td>
                </tr>";
                    }; ?>
            </table>
        </div>
    </div>


<?php include("../templates/footer.php"); ?>
