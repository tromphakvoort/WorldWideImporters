<?php $title = "Melkchocolade | World Wide Importers";
include("../templates/header.php");?>


<?php
//mySQLi information
    $db_host = "10.10.1.3";
    $db_username = "admin";
    $db_password = "Ayqy5ar988lFbefJ8wzo";

// db connection
    $connection = mysqli_connect($db_host, $db_username, $db_password) or die("Error connecting to database" . mysqli_error());

// select products
    $db = mysqli_select_db($connection, "webshop_wwi") or die("Error connecting to database" . mysqli_error());

  //  $sql = mysqli_query($connection, "SELECT p.product_name, p.description, p.price_amount, p.stock, p.price_currency, p.price_precision, c.category_name FROM products p
   //                                         JOIN productcategories pc ON p.id = pc.fk_prodcat_product_id
    //                                        JOIN categories c ON pc.fk_prodcat_cat_id = c.id
     //                                       WHERE c.id = 1 ");

 //   $query="SELECT p.id, p.product_name, p.description, p.price_amount, p.stock, p.price_currency, p.price_precision, c.category_name FROM products p
 //                                           JOIN productcategories pc ON p.id = pc.fk_prodcat_product_id
 //                                           JOIN categories c ON pc.fk_prodcat_cat_id = c.id
 //                                           WHERE c.id = 1 ";
     $query="SELECT p.id, p.product_name  FROM products p";

    $results = mysqli_query($connection, $query);
//temporarily deactivated
 //   while ($row = mysqli_fetch_assoc($results)) {
 //       printf ("<table><tr><th>%s</th></tr> <tr></tr><td>%s</td></tr> <tr><td> %s</td></tr> <tr>><td>%s</td></tr> <tr><td>%s</td></tr> <tr><td>%s</td></tr> </table>", $row["product_name"], $row["description"], $row["price_amount"], $row["stock"], $row["price_currency"], $row["category_name"]);
 //   };

    foreach($results as $result)


?>
<div 'margin-left: 10%; margin-right: 10%'>
    <span>
    <a href="product/1" target="_blank">
            <img style='height: 25%; width: 25%; object-fit: contain' src='public\assets\Products\category1\melkchocolade.jpg' />
    </a>
    </span>

    <span>
    <a href="product/2" target="_blank">
            <img style='height: 25%; width: 25%; object-fit: contain' src='public\assets\Products\category1\melkchocolade.jpg' />
    </a>
    </span>

    <span>
    <a href="product/3" target="_blank">
            <img style='height: 25%; width: 25%; object-fit: contain' src='public\assets\Products\category1\melkchocolade.jpg' />
    </a>
    </span>

    <span>
    <a href="product/4" target="_blank">
            <img style='height: 25%; width: 25%; object-fit: contain' src='public\assets\Products\category1\melkchocolade.jpg' />
    </a>
    </span>
</div>
<?php include("../templates/footer.php");?>
