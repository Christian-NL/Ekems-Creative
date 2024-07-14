<?php ?>

<!DOCTYPE html>
<html lang="fr">

<?php
    global $conn;
    include_once 'backend/config/db.php';
    if (!$conn) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }

    include 'config/get_head.php' ;
    include 'config/get_css.php' ;
?>

<body>

<?php
    include 'config/get_nav.php';
    include 'config/header_second.php' ;

    include "config/single_product.php" ;

    include 'config/footer.php';
?>

<?php include 'config/get_script.php' ;
$conn->close(); ?>

</body>

</html>