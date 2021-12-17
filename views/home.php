<?php $title = "Homepage | World Wide Importers";
include("../templates/header.php"); ?>
<div class="container">
    <section>
        <h1>Homepage</h1>
        <p>
            <a href="<?php echo $routeToProduct ?>">Check the first product</a>
        </p>
        <?php foreach($products as $product) {
            echo "<ul>";
            foreach ($product as $key => $item) {
                echo "<li> '$key': '$item' </li>";
            }
            echo "</ul>";
        } ?>
        <section>
</div>
<?php include("../templates/footer.php"); ?>
