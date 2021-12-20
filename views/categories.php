<?php $title = $category_name->getCategoryName() .  " | World Wide Importers";
include("../templates/header.php"); ?>
<div class="container">
    <section>
        <h1>Categorieën:</h1>
        <ul>
            <li><?php echo $category_name->getCategoryName($id) ?></li>
            <li><?php echo $category_name->getCategoryName($id +1) ?></li>
            <li><?php echo $category_name->getCategoryName($id +2) ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    </section>
</div>
<?php include("../templates/footer.php"); ?>
