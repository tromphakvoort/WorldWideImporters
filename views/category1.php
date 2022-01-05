<?php $title = "Melkchocolade";
//mySQLi information
    $db_host = "10.10.1.3";
    $db_username = "admin";
    $db_password = "Ayqy5ar988lFbefJ8wzo";

// db connection
    $connection = mysqli_connect($db_host, $db_username, $db_password) or die("Error connecting to database" . mysqli_error());

// select products
    $db = mysqli_select_db($connection, "webshop_wwi") or die("Error connecting to database" . mysqli_error());

    $sql = mysqli_query($connection, "SELECT p.product_name, p.description, p.price_amount, p.stock, p.price_currency, p.price_precision, c.category_name FROM products p
                                            JOIN productcategories pc ON p.id = pc.fk_prodcat_product_id
                                            JOIN categories c ON pc.fk_prodcat_cat_id = c.id
                                            WHERE c.id = 1 ");

    $query="SELECT p.product_name, p.description, p.price_amount, p.stock, p.price_currency, p.price_precision, c.category_name FROM products p
                                            JOIN productcategories pc ON p.id = pc.fk_prodcat_product_id
                                            JOIN categories c ON pc.fk_prodcat_cat_id = c.id
                                            WHERE c.id = 1 ";

    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        printf ("<table><tr><th>%s</th></tr> <tr></tr><td>%s</td></tr> <tr><td> %s</td></tr> <tr>><td>%s</td></tr> <tr><td>%s</td></tr> <tr><td>%s</td></tr> </table>", $row["product_name"], $row["description"], $row["price_amount"], $row["stock"], $row["price_currency"], $row["category_name"]);
    }

    echo "<button>" . $row["product_name"] ."</button>";

