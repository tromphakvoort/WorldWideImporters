<?php $title = $category_name->getcategoryname() . " | World Wide Importers";
include("../templates/header.php"); ?>
<div class="container">
    <section>
        <h1>Categorieën:</h1>
        <ul>
            <li><?php echo $category_name->getcategoryname() ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    </section>
</div>
<?php include("../templates/footer.php"); ?>
