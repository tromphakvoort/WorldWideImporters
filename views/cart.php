<?php $title = "Winkelwagen | World Wide Importers";
include("../templates/header.php"); ?>
<?php
if(!isset($_SESSION)) {
    session_start();
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
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value){
                        ?>
                <tr>
                    <td><?php echo $value["item_name"]; ?></td>
                    <td><?php echo $value["item_quantity"]; ?></td>
                    <td>$ <?php echo $value["product_price"]; ?></td>
                    <td>$ <?php echo number_format($value["item_quantity"] * $value["product_price"]) ?></td>
                    <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Verwijder product</span></a></td>
                </tr>
                <?php
                    $total = $total + ($value["item_quantity"] * $value["product_price"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Totaal</td>
                    <th align="right">$ <?php echo number_format($total, 2); ?></th>
                    <td></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>


<?php include("../templates/footer.php"); ?>
