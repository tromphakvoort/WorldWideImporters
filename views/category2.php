<?php $title = "Pure chocolade | World Wide Importers";
include("../templates/header.php");?>

<body>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
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
                $results = mysqli_query($connection, "SELECT p.id, product_name, description, file_location, filename, mimetype FROM products p JOIN productcategories pc ON p.id=fk_prodcat_product_id JOIN attachments a ON fk_att_product_id=p.id WHERE fk_prodcat_cat_id=2");

                // Loop through products and display them
                if ($results->num_rows > 0) {
                    while ($i = $results->fetch_assoc()) {
                        ?> <div class="col-md-3">
                            <div class="card box-shadow" style="width: 18rem;">
                                <img src="<?php echo $i["file_location"] . $i["filename"] . $i["mimetype"]; ?>"
                                     class="card-img-top" alt="IMAGE OF PRODUCT" style='object-fit: contain'>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $i["product_name"]; ?></h5>
                                    <p class="card-text"><?php $in = $i["description"];
                                        $out = strlen($in) > 100 ? substr($in, 0, 100) . "..." : $in;
                                        echo $out; ?></p>
                                    <a href="product/<?php echo $i["id"] ?>" target="_self" class="btn btn-primary">Kies dit
                                        product</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
<?php include("../templates/footer.php");?>
