
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg rd-navbar-classic navbar-light bg-white fixed-top page-header-corporate">
    <div class="container rd-navbar-main-element">
        <div class="rd-navbar-panel d-flex justify-content-between align-items-center w-100">
            <!-- Bouton de bascule pour la navigation responsive -->
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-brand d-flex align-items-center mx-auto">
                <img src="assets/img.png" height="35" width="35" class="mr-2">
                <h4 class="font-weight-light font-weight-bold mb-0">Ekem's Creative</h4>
            </div>

            <a class="nav-link cart-icon" href="panier.html">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count"><?php echo isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0; ?></span>
            </a>

        </div>

        <!-- Contenu de la navigation -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'index.php' || $current_page == 'index.html') ? 'active' : ''; ?>" href="index.html">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'produits.php' || $current_page == 'produits.html') ? 'active' : ''; ?>" href="produits.php">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'services.php' || $current_page == 'services.html') ? 'active' : ''; ?>" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'about_us.php' || $current_page == 'about_us.html') ? 'active' : ''; ?>" href="about_us.php">À Propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'contact_us.php' || $current_page == 'contact_us.html') ? 'active' : ''; ?>" href="contact_us.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'realisation.php' || $current_page == 'realisation.html') ? 'active' : ''; ?>" href="realisation.php">Realisation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cart-icon validate-order-button" href="#">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">0</span>
                    </a>


                    <!--<a class="nav-link cart-icon" href="panier.html">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count"><?php echo isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0; ?></span>
                    </a>-->
                </li>
            </ul>
        </div>

    </div>
</nav>

<?php include 'get_script.php' ?>

<!-- Inclure jQuery avant Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Inclure le script de Bootstrap -->
<script src="js/core.min.js"></script>
<script>
    function updateCartBadge() {
        const cartBadge = document.querySelector('.cart-count');
        const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
        cartBadge.innerText = totalItems;
    }
</script>

<!-- Votre autre script -->
<script src="js/script.js"></script>
