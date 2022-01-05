<?php $title = "Homepage | World Wide Importers";
include("../templates/header.php"); ?>
<div class="container">
    <section>
        <h1>Homepage</h1>
<!--        Image carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1920x1080" class="d-block w-100" alt="Product1">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1920x1080" class="d-block w-100" alt="Product2">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1920x1080 " class="d-block w-100" alt="Product3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
<!--        List of products-->
        <div>
            <?php foreach ($products as $product) {
                print("<ul>
<li>" . $product->getProductName() . "</li>
<li>$ " . round($product->getPriceAmount() / 100, $product->getPricePrecision()) . "</li>
</ul>");
            } ?>
        </div>
        </section>
    <section>

        <a href="<?php echo $routes->get('homepage')->getPath() ?>">Bekijk categorieën</a>

    </section>
</div>
<?php include("../templates/footer.php"); ?>
