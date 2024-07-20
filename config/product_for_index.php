<?php
global $conn;
$right_path = 'backend/' ;
include_once 'backend/config/db.php';

// Définir le nombre de produits à afficher sur la page d'accueil
$products_to_display = 4;

// Requête pour obtenir les 4 produits les plus récents
$products_query = "SELECT product_id, product_name, product_price, product_image_path FROM product ORDER BY created_at DESC LIMIT $products_to_display";
$products_result = $conn->query($products_query);

$output = "";

if ($products_result) {
    if ($products_result->num_rows > 0) {
        while ($row = $products_result->fetch_assoc()) {
            // Générer le chemin complet de l'image
            $image_path = $right_path . $row['product_image_path'];

            // Vérifier si l'image existe
            if (file_exists($image_path)) {
                $output .= "
                    <div class='col-sm-6 col-md-4 col-lg-6 col-xl-4'>
                        <article class='product'>
                            <div class='product-body'>
                                <div class='product-figure'><img src='" . $image_path . "' alt='' width='142' height='163'></div>
                                <h5 class='product-title'>" . $row['product_name'] . "</h5>
                                <div class='product-price-wrap'>
                                    <div class='product-price'>" . $row['product_price'] . " XAF</div>
                                </div>
                            </div>
                            <div class='product-button-wrap'>
                                <div class='product-button'>
                                    <a class='button button-primary button-zakaria fl-bigmug-line-search74' href='single_product.php?id=" . $row['product_id'] . "'>
                                        <i class='fas fa-search small-icon thin-icon'></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>";
            } else {
                // Message d'erreur si l'image n'existe pas
                $output .= "
                    <div class='col-sm-6 col-md-4 col-lg-6 col-xl-4'>
                        <article class='product'>
                            <div class='product-body'>
                                <div class='product-figure'><img src=' " . $right_path ."Image/Produits/default_product.png' alt='Image non disponible' width='142' height='163'></div>
                                <h5 class='product-title'>" . $row['product_name'] . "</h5>
                                <div class='product-price-wrap'>
                                    <div class='product-price'>" . $row['product_price'] . " XAF</div>
                                </div>
                            </div>
                            <div class='product-button-wrap'>
                                <div class='product-button'>
                                    <a class='button button-primary button-zakaria fl-bigmug-line-search74' href='single_product.php?id=" . $row['product_id'] . "'>
                                        <i class='fas fa-search small-icon thin-icon'></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>";
            }
        }
    } else {
        $output = "<p>Aucun produit trouvé.</p>";
    }
} else {
    $output = "<p>Erreur lors de la récupération des produits.</p>";
}

echo "<div class='row row-30 row-lg-50'>" . $output . "</div>";
?>