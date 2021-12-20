<?php $title = $category_name->getCategoryName() .  " | World Wide Importers";
include("../templates/header.php"); ?>
<div class="container">
    <section>
        <h1>Categorieën:</h1>
        <ul>
            <li><?php echo $category_name->getCategoryName() ?></li>
            <li><?php echo $category_name->getCategoryName() ?></li>
            <li><?php echo $category_name->getCategoryName() ?></li>
        </ul>
        <div>
            <?php foreach ($categories as $category_name) {
                print("<ul>
<li>" . $category_name->getCategoryName() . "</li>
</ul>");
            } ?>
        </div>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    </section>
</div>
<?php include("../templates/footer.php"); ?>
