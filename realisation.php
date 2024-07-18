

<?php ?>

<!DOCTYPE html>
<html lang="fr">
<?php
global $conn;
include_once 'backend/config/dbs.php';
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
include 'config/get_head.php' ?>
<?php include 'config/get_css.php' ?>

<body>
<?php include 'config/get_nav.php' ?>
<?php include 'config/header_second.php' ?>

<?php
$right_image_path = 'backend/' ;
include 'config/realisation.php';
?>

<?php include 'config/footer.php' ?>
<?php include 'config/get_script.php' ;
$conn->close(); ?>
</body>

</html>

