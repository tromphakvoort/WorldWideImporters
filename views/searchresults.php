<?php $title = "Zoekresultaten | World Wide Importers";
include("../templates/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Zoekresultaten voor <?php echo $searchQuery ?></h1>
        </div>

        <?php if(isset($error) && strlen($error) > 0) {
            echo "
            <div class='col-md-12'>
                <div class='alert alert-danger' role='alert'>
                  " . $error . " 
                </div>
            </div>
            ";
        }
?>
        <?php
        foreach ($results as $result) {
            $in = $result["description"];
            $out = strlen($in) > 100 ? substr($in, 0, 100) . "..." : $in;
            echo "
                <div class='col-md-6 mb-3'>
                   <div class='card'>
                      <div class='card-body'>
                        <h5 class='card-title'>" . $result["product_name"] . "</h5>
                        <p class='card-text'>" . $out . "</p>
                        <a href='/product/" . $result["id"] . "' class='card-link'>Naar product</a>
                      </div>
                    </div>
                </div> 
                ";
        }
        ?>
    </div>
</div>

<?php include("../templates/footer.php"); ?>

