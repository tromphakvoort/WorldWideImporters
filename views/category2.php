<?php $title = "Pure chocolade | World Wide Importers";
include("../templates/header.php");?>

<body>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <?php
                //mySQLi information
                $db_host = "10.10.1.3";
                $db_username = "admin";
                $db_password = "Ayqy5ar988lFbefJ8wzo";

                // db connection
                $connection = mysqli_connect($db_host, $db_username, $db_password) or die("Error connecting to database" . mysqli_error());

                // select products
                $db = mysqli_select_db($connection, "webshop_wwi") or die("Error connecting to database" . mysqli_error());

                // Query for category 2
                $results = mysqli_query($connection, "SELECT p.id, product_name, file_location, filename, mimetype FROM products p JOIN productcategories pc ON p.id=fk_prodcat_product_id JOIN attachments a ON fk_att_product_id=p.id WHERE fk_prodcat_cat_id=2");

                // Loop through products and display them
                if ($results->num_rows > 0) {
                    while ($i = $results->fetch_assoc()) {
                        ?> <div class="card box-shadow">
                            <div class="vertical-center"> <?php echo $i["product_name"];
                                $imagelocation = $i["file_location"]. $i["filename"] . $i["mimetype"];
                                ?></div> <a href=product/<?php echo $i["id"] ?> target="_blank">
                                <img class="card-img-top" style='height: 300px; width: 300px; object-fit: contain' src="<?php echo $imagelocation; ?>" />
                            </a>
                        </div>
                        <?php echo "<br>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
<?php include("../templates/footer.php");?>
