<?php $title = $category_name->getCategoryName() .  " | World Wide Importers";
include("../templates/header.php"); ?>
<div class="container">
    <section>
        <h1>Categorieën:</h1>
        <ul>
            <li><?php echo $category_name->getCategoryName() ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    </section>
</div>
<?php include("../templates/footer.php"); ?>
