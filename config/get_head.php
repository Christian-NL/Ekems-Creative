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

    <!-- META Tags for SEO -->
    <meta name="description" content="Découvrez Ekem's Creative, un leader à Yaoundé dans l'impression, la sérigraphie, la broderie et la conception graphique. Nous offrons des services personnalisés pour sublimer vos projets créatifs. Notre expertise et notre engagement envers la qualité nous démarquent. Contactez-nous pour des impressions de haute qualité, des broderies élégantes et des designs uniques.">
    <meta name="keywords" content="impression Yaoundé, sérigraphie Yaoundé, broderie Cameroun, conception graphique, services personnalisés, qualité supérieure, Ekem's Creative, design unique, communication visuelle, impression textile, services de broderie">
    <meta name="description" content="Bienvenue à Ekem's Creative, situé à Yaoundé, Cameroun. Nous offrons des services de qualité en impression, sérigraphie, broderie et conception graphique. Découvrez notre galerie de réalisations et nos services sur mesure pour répondre à tous vos besoins.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Ekem's Creative, impression, sérigraphie, broderie, conception graphique, services personnalisés, Yaoundé, Cameroun, haute qualité, design, textile, gros volumes">
    <meta name="author" content="Ekem's Creative">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Bienvenue à Ekem's Creative - Impression, Sérigraphie, Broderie, Design">
    <meta property="og:description" content="Explorez nos services d'impression, de sérigraphie, de broderie et de conception graphique. Nous vous offrons des solutions sur mesure pour répondre à vos besoins spécifiques.">
    <meta property="og:image" content="images/print.jpg">
    <meta property="og:url" content="www.ekemscreative.com">

    <!-- Twitter Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ekem's Creative - Votre partenaire pour l'impression, sérigraphie et broderie">
    <meta name="twitter:description" content="Découvrez nos services de qualité supérieure pour tous vos besoins en impression, sérigraphie, broderie et conception graphique.">
    <meta name="twitter:image" content="images/print.jpg">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img.png" />


    <!-- Votre autre script -->
    <script src="js/script.js"></script>
    <script src="get_script.php"></script>
<?php include 'get_script.php' ?>