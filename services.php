<?php ?>

<!DOCTYPE html>
<html lang="fr">

<?php
global $conn;
include_once 'backend/config/db.php';
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

include 'config/get_head.php' ?>
<?php include 'config/get_css.php' ?>

<body>
    <?php include 'config/get_nav.php' ?>
    <?php include 'config/header_second.php' ?>
    <?php include "config/get_services.php"; ?>
    <?php include 'config/get_stay_connected.php' ?>
    <?php include 'config/get_package.php' ?>
    <?php include "config/get_questions_about_service.php"; ?>
    <?php include 'config/footer.php';
    $conn->close(); ?>

</body>

</html>
