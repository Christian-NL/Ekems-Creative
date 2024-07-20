<?php ?>

<!DOCTYPE html>
<html lang="fr">

<?php
    global $conn;
    include_once 'backend/config/dbs.php';
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


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var url = window.location.href;
        var productName = document.querySelector(".product-title").innerText;

        // Facebook
        document.getElementById("facebook-share").href = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url);

        // Twitter
        document.getElementById("twitter-share").href = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(productName) + "&url=" + encodeURIComponent(url);

        // LinkedIn
        document.getElementById("linkedin-share").href = "https://www.linkedin.com/shareArticle?mini=true&url=" + encodeURIComponent(url) + "&title=" + encodeURIComponent(productName);

        // WhatsApp
        document.getElementById("whatsapp-share").href = "https://api.whatsapp.com/send?text=" + encodeURIComponent(productName) + " " + encodeURIComponent(url);
    });
</script>

<?php include 'config/get_script.php' ;
$conn->close(); ?>

<!-- Votre autre script -->
<script src="js/script.js"></script>
<script src="get_script.php"></script>
<?php include 'config/get_script.php' ?>

</body>

</html>