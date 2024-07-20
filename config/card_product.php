
<?php
global $conn;

// Définir le nombre de produits par page
$products_per_page = 9;

// Obtenir le numéro de page actuel depuis l'URL, défaut à 1
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $products_per_page;

// Requête pour obtenir le nombre total de produits
$total_products_query = "SELECT COUNT(*) AS total FROM product";
$total_products_result = $conn->query($total_products_query);
$total_products = $total_products_result->fetch_assoc()['total'];
$total_pages = ceil($total_products / $products_per_page);

// Requête pour obtenir les produits de la page actuelle
$products_query = "SELECT product_id, product_name, product_price, product_image_path FROM product LIMIT $offset, $products_per_page";
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
                            <div class='product-button'>
                                <!-- <a class='button button-secondary button-zakaria fl-bigmug-line-shopping202' href='#'> -->
                                <a class='button button-secondary button-zakaria fl-bigmug-line-shopping202 addToCart' 
                                    data-id='" . $row['product_id'] . "' 
                                    data-product='" . $row['product_name'] . "' 
                                    data-price='" . $row['product_price'] . "' 
                                    href='#'>
                                    <!--<i class='fas fa-shopping-cart small-icon thin-icon'></i>-->
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
                            <div class='product-button'>
                                <a class='button button-secondary button-zakaria fl-bigmug-line-shopping202' href='#'>
                                    <i class='fas fa-shopping-cart small-icon thin-icon'></i>
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

$conn->close();
echo "<div class='row row-30 row-lg-50'>" . $output . "</div>";
?>



<div class="pagination-wrap">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <?php if ($current_page > 1): ?>
                <li class="page-item page-item-control">
                    <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" aria-label="Previous">
                        <i class="fas fa-arrow-left small-icon"></i>
                        <span class="icon" aria-hidden="true"></span>
                    </a>
                </li>
            <?php else: ?>
                <li class="page-item page-item-control disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <i class="fas fa-arrow-left small-icon"></i>
                        <span class="icon" aria-hidden="true"></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php for ($page = 1; $page <= $total_pages; $page++): ?>
                <li class="page-item <?php echo ($page == $current_page) ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo $page; ?>"><?php echo $page; ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($current_page < $total_pages): ?>
                <li class="page-item page-item-control">
                    <a class="page-link" href="?page=<?php echo $current_page + 1; ?>" aria-label="Next">
                        <i class="fas fa-arrow-right small-icon'></i>
                        <span class="icon" aria-hidden="true"></span>
                    </a>
                </li>
            <?php else: ?>
                <li class="page-item page-item-control disabled">
                    <a class="page-link" href="#" aria-label="Next">
                        <i class="fas fa-arrow-right small-icon'></i>
                        <span class="icon" aria-hidden="true"></span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Récupérez tous les boutons Ajouter au panier
        const addToCartButtons = document.querySelectorAll('.addToCart');
        // Récupérez le panier depuis le local storage ou créez un tableau vide s'il n'existe pas
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        // Mettre à jour le badge du panier avec le nombre actuel d'articles dans le localStorage
        updateCartBadge();

        // Ajoutez un événement de clic à chaque bouton
        addToCartButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = button.dataset.id;
                const productName = button.dataset.product;
                const productPrice = button.dataset.price;
                // Vérifiez si le produit est déjà ajouté au panier
                const existingProduct = cartItems.find(function(item) {
                    return item.id === productId;
                });
                if (existingProduct) {
                    // Si le produit existe déjà dans le panier, incrémente juste la quantité
                    existingProduct.quantity++;
                } else {
                    // Sinon, créez un nouvel élément de produit et ajoutez-le au panier
                    cartItems.push({
                        id: productId,
                        name: productName,
                        price: productPrice,
                        quantity: 1
                    });
                }
                // Mettez à jour le panier dans le local storage
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                // Mettre à jour le badge du panier
                updateCartBadge();
            });
        });

        function updateCartBadge() {
            const cartBadge = document.querySelector('.cart-count');
            const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
            cartBadge.innerText = totalItems;
        }

        function envoyerCommande() {
            // Récupérez le panier depuis le local storage
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            // Créez une chaîne avec toutes les informations des produits
            const productLines = cartItems.map(function(item) {
                return `- ${item.name} (XAF ${item.price}) x${item.quantity}`
            });
            const message = encodeURIComponent("Je souhaite commander les produits suivants:\n\n" + productLines.join("\n"));
            // Redirigez vers WhatsApp avec le message généré
            window.location.href = "whatsapp://send?phone=+237656629937&text=" + message;
            // Utilisation d'un délai pour s'assurer que la redirection se fait avant de vider le localStorage
            setTimeout(function() {
                localStorage.removeItem('cartItems');
                localStorage.clear();
                updateCartBadge();
            }, 1000); // délai d'une seconde
        }

        // Ajouter un événement de clic pour le bouton de validation de la commande
        document.querySelector('.validate-order-button').addEventListener('click', function(e) {
            e.preventDefault();
            envoyerCommande();
        });
    });
</script>

<!-- Votre autre script -->
<script src="js/script.js"></script>
<script src="get_script.php"></script>
<?php include 'get_script.php' ?>



