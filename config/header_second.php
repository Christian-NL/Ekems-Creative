<?php

function getPageTitleAndIcon() {
    global $conn;

    // Obtenir le nom du fichier de la page en cours
    $current_page = basename($_SERVER['PHP_SELF']);

    // Vérifier si c'est une page de produit spécifique
    if ($current_page == 'single_product.php' && isset($_GET['id'])) {
        // Requête pour obtenir le nom du produit
        $product_id = (int)$_GET['id'];
        $product_query = "SELECT product_name FROM product WHERE product_id = $product_id";
        $product_result = $conn->query($product_query);

        if ($product_result && $product_result->num_rows > 0) {
            $product = $product_result->fetch_assoc();
            // Définir l'icône pour les produits
            $product_icon = 'fas fa-cube'; // Exemple d'icône pour les produits
            return [$product['product_name'], $product_icon];
        }
    }

    // Mapping des noms de fichiers aux titres et icônes de pages
    switch ($current_page) {
        case 'index.php':
        case 'index.html':
            return ['Accueil', 'fas fa-home'];
        case 'produits.php':
        case 'produits.html':
            return ['Nos Produits', 'fas fa-box-open'];
        case 'services.php':
        case 'services.html':
            return ['Nos Services', 'fas fa-concierge-bell'];
        case 'about_us.php':
        case 'about_us.html':
            return ['À Propos de Nous', 'fas fa-info-circle'];
        case 'contact_us.php':
        case 'contact_us.html':
            return ['Contactez-Nous', 'fas fa-envelope'];
        case 'realisation.php':
        case 'realisation.html':
            return ['Nos Œuvres', 'fas fa-paint-brush'];
        default:
            return ['', ''];
    }
}


function getPageName() {
    global $conn;

    // Obtenir le nom du fichier de la page en cours
    $current_page = basename($_SERVER['PHP_SELF']);

    // Vérifier si c'est une page de produit spécifique
    if ($current_page == 'single_product.php' && isset($_GET['id'])) {
        // Requête pour obtenir le nom du produit
        $product_id = (int)$_GET['id'];
        $product_query = "SELECT product_name FROM product WHERE product_id = $product_id";
        $product_result = $conn->query($product_query);

        if ($product_result && $product_result->num_rows > 0) {
            $product = $product_result->fetch_assoc();
            return $product['product_name'];
        }
    }

    // Mapping des noms de fichiers aux noms de pages pour l'affichage
    switch ($current_page) {
        case 'index.php':
        case 'index.html':
            return 'Accueil';
        case 'produits.php':
        case 'produits.html':
            return 'Produits';
        case 'services.php':
        case 'services.html':
            return 'Services';
        case 'about_us.php':
        case 'about_us.html':
            return 'À Propos';
        case 'contact_us.php':
        case 'contact_us.html':
            return 'Contact';
        case 'realisation.php':
            return 'Réalisations';
        default:
            return '';
    }
}



function getBreadcrumbs() {
    $breadcrumbs = [];
    $current_page = basename($_SERVER['PHP_SELF']);

    // Ajouter l'Accueil
    $breadcrumbs[] = ['label' => 'Accueil', 'link' => 'index.php'];

    // Ajouter le lien de la page de Produits pour les pages de produit
    if ($current_page == 'single_product.php') {
        $breadcrumbs[] = ['label' => 'Produits', 'link' => 'produits.php'];
    }

    // Ajouter le nom de la page courante
    $breadcrumbs[] = ['label' => getPageName(), 'link' => ''];

    return $breadcrumbs;
}
?>

<section class="breadcrumbs-custom my-5 mt-5">
    <div class="parallax-container" data-parallax-img="images/plural-3.jpg">
        <div class="material-parallax parallax">
            <img src="images/ind-print-2.jpg" alt="" style="display: block; transform: translate3d(-50%, 176px, 0px);">
        </div>
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <?php list($pageTitle, $pageIcon) = getPageTitleAndIcon(); ?>
                <h2 class="breadcrumbs-custom-title"><i class="<?php echo $pageIcon; ?>"></i> <?php echo $pageTitle; ?></h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="my-breadcrumbs-custom-path">
                <?php
                $breadcrumbs = getBreadcrumbs();
                foreach ($breadcrumbs as $breadcrumb) {
                    if ($breadcrumb['link']) {
                        echo "<li><a href='{$breadcrumb['link']}'>{$breadcrumb['label']}</a></li>";
                    } else {
                        echo "<li class='active'>{$breadcrumb['label']}</li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</section>

<!-- Votre autre script -->
<script src="js/script.js"></script>
<script src="get_script.php"></script>
<?php include 'get_script.php' ?>
