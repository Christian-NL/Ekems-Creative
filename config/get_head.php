<?php
function getPageTitle() {
    $current_page = basename($_SERVER['PHP_SELF']);

    switch ($current_page) {
        case 'index.php':
        case 'index.html':
            return "Ekem's Creative - Accueil";
        case 'produits.php':
        case 'produits.html':
            return "Ekem's Creative - Produits";
        case 'services.php':
        case 'services.html':
            return "Ekem's Creative - Services";
        case 'about_us.php':
        case 'about_us.html':
            return "Ekem's Creative - À Propos";
        case 'contact_us.php':
        case 'contact_us.html':
            return "Ekem's Creative - Contact";
        default:
            return "Ekem's Creative";
    }
}
?>

<meta charset="UTF-8">
<title><?php echo getPageTitle(); ?></title>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img.png" />


    <!-- Votre autre script -->
    <script src="js/script.js"></script>
    <script src="get_script.php"></script>
<?php include 'get_script.php' ?>