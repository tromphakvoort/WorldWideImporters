<?php $title = $product->getProductName() . " | World Wide Importers";
include("../templates/header.php"); ?>
<div class="container">
    <section>
        <h1><?php echo $product->getProductName() ?></h1>
        <ul>
            <li>Beschrijving: <?php echo $product->getDescription(); ?></li>
            <li>Prijs: €<?php echo $product->getPriceAmount(); ?></li>
            <li>Voorraad: <?php echo $product->getStock(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    </section>
</div>
<?php include("../templates/footer.php"); ?>
