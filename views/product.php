<?php $title = $product->getProductName() . " | World Wide Importers";
include("../templates/header.php"); ?>

<div class="container">
    <section>
        <h1><?php echo $product->getProductName() ?></h1>
        <?php foreach ($product->getProductImages($product->getId()) as $image) {
            echo '<img class="img-fluid rounded" src="/' . $image . '" alt="' . $product->getProductName() . '">';
        }
        ?>
        <ul>
            <li>Beschrijving: <?php echo $product->getDescription(); ?></li>
            <li>Prijs: €<?php $price=round($product->getPriceAmount() / 100, $product->getPricePrecision()); print($price); ?></li>
            <li>Voorraad: <?php echo $product->getStock(); ?></li>
        </ul>
        <form action="/addToCart" method="post" class="mb-3">
            <input type="number" hidden name="product-id" value="<?php echo $product->getId(); ?>" />
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Aan winkelwagen toevoegen
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                </svg>
            </button>
        </form>
    </section>
</div>
<?php include("../templates/footer.php"); ?>
