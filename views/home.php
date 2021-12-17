<?php $title = "Homepage | World Wide Importers";
include("../templates/header.php"); ?>
<div class="container">
    <section>
        <h1>Homepage</h1>
        <p>
            <a href="<?php echo $routeToProduct ?>">Check the first product</a>
        </p>
        <div>
            <?php foreach ($products as $product) {
                print("<ul>
<li>" . $product->getProductName() . "</li>
<li>$ " . round($product->getPriceAmount() / 100, $product->getPricePrecision()) . "</li>
</ul>");
            } ?>
        </div>
        <section>
</div>
<?php include("../templates/footer.php"); ?>
