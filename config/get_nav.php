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

            <div class="navbar-brand d-flex align-items-center mx-auto">
                <img src="../assets/img.png" height="35" width="35" class="mr-2">
                <h4 class="font-weight-light font-weight-bold mb-0">Ekem's Creative</h4>
            </div>

            <a class="nav-link" href="panier.html">
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>

        <!-- Contenu de la navigation -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'index.php' || $current_page == 'index.html') ? 'active' : ''; ?>" href="../index.html">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'produits.php' || $current_page == 'produits.html') ? 'active' : ''; ?>" href="../produits.html">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'services.php' || $current_page == 'services.html') ? 'active' : ''; ?>" href="../services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'about_us.php' || $current_page == 'about_us.html') ? 'active' : ''; ?>" href="../about_us.html">À Propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'contact_us.php' || $current_page == 'contact_us.html') ? 'active' : ''; ?>" href="../contact_us.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder <?php echo ($current_page == 'realisation.php' || $current_page == 'realisation.html') ? 'active' : ''; ?>" href="../realisation.php.html">Realisation</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php include 'get_script.php' ?>


<style>
    /* CSS supplémentaire */
    .navbar-brand {
        display: flex;
        align-items: center;
    }

    .navbar-brand img {
        margin-right: 10px;
    }

    .nav-link i.fas.fa-shopping-cart {
        font-size: 24px;
    }

    /* Cacher l'icône de panier par défaut et la montrer sur mobile */
    @media (max-width: 767px) {
        .navbar-brand + .nav-link {
            display: inline-block;
        }

        .navbar-nav {
            text-align: center;
        }

        .navbar-collapse {
            justify-content: center;
        }
    }

    @media (min-width: 768px) {
        .navbar-brand + .nav-link {
            display: none;
        }
    }

</style>