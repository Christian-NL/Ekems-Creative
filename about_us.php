<?php  ?>

<!DOCTYPE html>
<html lang="fr">

<?php
global $conn;
include_once 'backend/config/db.php';
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

    $right_path = 'backend/' ;
    $db = 'AdminSpace/db.php' ;
    include $db;
    include 'config/get_head.php' ;
    include 'config/get_css.php' ;
?>

<body>

    <?php
        include 'config/get_nav.php' ;
        include 'config/header_second.php' ;
    ?>
    <?php include 'config/get_about_section.php'?>
    <?php include 'config/get_our_history.php' ?>
    <?php include 'config/get_team_member.php'; ?>
    <?php include 'config/get_testimonials.php' ?>
    <?php include "config/footer.php";
    include 'config/get_script.php';
    $conn->close(); ?>
</body>

</html>