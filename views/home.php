<?php $title = "Homepage | World Wide Importers";
include("../templates/header.php");


?>
<div class="container">
    <section>
        <h1>Homepage</h1>
        <!--        Image carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php foreach ($products as $key => $product) {
                    $extraClasses = "";
                    if ($key == 0) {
                        $extraClasses = 'class="active" aria-current="true"';
                    };

                    echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $key . '" aria-label="' . $product["product_name"] . '" ' . $extraClasses . '></button>';
                } ?>
            </div>
            <div class="carousel-inner">
                <?php foreach ($products as $key => $product) {
                    $extraClasses = "";
                    if ($key == 0) {
                        $extraClasses = 'active';
                    };

                    echo '<div class="carousel-item ' . $extraClasses . '">
                    <img src="../' . $product["file_location"] . $product["filename"] . $product["mimetype"] . '" class="d-block w-100 h-auto" alt="' . $product["product_name"] . '">
                    </div>';
                } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="categories wijStaan row">
            <div class="col-md-12 title-featured">
                <h3>WIJ STAAN VOOR...</h3>
            </div>
            <div class="col-xs-12">
                <div class="iconicon1"><img src="https://cdn.webshopapp.com/shops/78708/themes/72270/assets/icon3circle.png?20211221092116" alt=""><span class="htitle">FAIR TRADE</span></div>
                <div class="iconicon1"><img src="https://cdn.webshopapp.com/shops/78708/themes/72270/assets/icon3circle.png?20211221092116" alt=""><span class="htitle">VERSHEID</span></div>
                <div class="iconicon1"><img src="https://cdn.webshopapp.com/shops/78708/themes/72270/assets/icon3circle.png?20211221092116" alt=""><span class="htitle">MAATWERK</span></div>
                <div class="iconicon1"><img src="https://cdn.webshopapp.com/shops/78708/themes/72270/assets/icon3circle.png?20211221092116" alt=""><span class="htitle">EXTRA PUUR</span></div>
                <div class="iconicon1"><img src="https://cdn.webshopapp.com/shops/78708/themes/72270/assets/icon3circle.png?20211221092116" alt=""><span class="htitle">KWALITEIT</span></div>
            </div>
        </div>
        <?php include("../templates/footer.php"); ?>
