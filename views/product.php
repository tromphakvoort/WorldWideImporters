<?php $title = $product->getProductName() . " | World Wide Importers";
include("../templates/header.php"); ?>
<div class="container">
    <section>
        <h1>My Product:</h1>
        <ul>
            <li><?php echo $product->getProductName() ?></li>
            <li><?php echo $product->getDescription(); ?></li>
            <li><?php echo $product->getPriceAmount(); ?></li>
            <li><?php echo $product->getStock(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    </section>
</div>
<?php include("../templates/footer.php"); ?>
