<?php
// Récupérer le nom du fichier de la page en cours
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg rd-navbar-classic navbar-light bg-white fixed-top page-header-corporate">
    <div class="container">
        <div class="rd-navbar-panel d-flex justify-content-between align-items-center w-100">
            <!-- Bouton de bascule pour la navigation responsive -->
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-brand mx-auto d-flex align-items-center">
                <img src="assets/img.png" height="35" width="35" class="mr-2">
                <h4 class="font-weight-light font-weight-bold mb-0">Ekem's Creative</h4>
            </div>
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
            </ul>
        </div>
    </div>
</nav>

<?php include 'get_script.php' ?>
