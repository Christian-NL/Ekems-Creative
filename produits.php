<?php ?>

<!DOCTYPE html>
<html lang="fr">

<?php
include 'config/get_head.php' ;
include 'config/get_css.php' ;
?>

<body>

<?php
    include 'config/test_file.php';
    include 'config/header_second.php' ;
?>

<section class="section section-xxl bg-default text-md-left">
    <div class="container">
        <div class="row row-50">

            <div class="col-lg-8 col-xl-9">
                <div class="product-top-panel group-md">
                    <p class="product-top-panel-title">Les resultats 1–9 sur <?php $total_products_query ?></p>
                </div>


                <?php
                $right_path = 'backend/' ;
                $db = 'AdminSpace/db.php' ;
                include $db;
                include "config/card_product.php"
                ?>
            </div>
        </div>
    </div>
</section>

<?include 'config/footer.php'; ?>

<?php include 'config/get_script.php' ?>

</body>

</html>