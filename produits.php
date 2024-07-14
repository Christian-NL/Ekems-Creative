<?php ?>

<!DOCTYPE html>
<html lang="fr">

<?php
include 'config/get_head.php' ;
include 'config/get_css.php' ;
?>

<body>

<?php
    include 'config/get_nav.php';
    include 'config/header_second.php' ;
?>

<?php
$productFile = 'product.php';
if (file_exists($productFile)) {
    include $productFile;
} else {
    echo '<div>Erreur : Impossible de charger les produits.</div>';
}
?>

<?php include 'config/footer.php'; ?>

<?php include 'config/get_script.php' ?>

</body>

</html>