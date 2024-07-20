<!DOCTYPE html>
<html class="wide wow-animation desktop portrait rd-navbar-fixed-linked" lang="fr">


<?php
global $conn;
$right_path = 'backend/' ;
include_once 'backend/config/db.php';
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

include 'config/get_head.php' ;
include 'config/get_css.php' ;

echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>'
    . '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>';
?>


<body>

    <!-- NavBAr -->
    <?php include_once "config/get_nav.php" ; ?>


    <!-- header Home page -->
    <section class="section bg-img-1 my-5 mt-5">
        <div class="swiper-container swiper-slider swiper-slider-2 swiper-container-horizontal swiper-container-ios" data-autoplay="5000">
            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-active" style="width: 1349px;">
                    <div class="container">
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-lg-4 col-xl-4 inset-xl-top-170 text-left fadeIn animated" data-caption-animate="fadeIn" data-caption-delay="200">
                                <h1 class="text-transparent-big text-left">Top</h1>
                                <h2 class="bit-text-subtitle text-decor-left text-left offset-top-20">
                                    <span class="d-block font-weight-lighter text-white">Impression</span>
                                    <span class="d-block font-weight-lighter text-white">Design</span>
                                </h2>
                                <a class="button button-lg button-secondary button-zakaria" href="#">En savoir plus</a>
                            </div>
                            <div class="col-lg-6 col-xl-3 inset-xl-top-80 position-relative fadeIn animated" data-caption-animate="fadeIn" data-caption-delay="300">
                                <div class="slide-float-items"><img src="" alt="">
                                </div>
                                <div class="slide-image-wrapper"><img src="images/print.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-next" style="width: 1349px;">
                    <div class="container">
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-lg-4 col-xl-4 inset-xl-top-170 text-left not-animated" data-caption-animate="fadeIn" data-caption-delay="200">
                                <h1 class="text-transparent-big text-left">Top</h1>
                                <h2 class="bit-text-subtitle text-decor-left text-left offset-top-20">
                                    <span class="d-block font-weight-light text-white">Broderie &amp;</span>
                                    <span class="d-block font-weight-light text-white">Confection textile</span>
                                </h2>
                                <a class="button button-lg button-secondary button-zakaria" href="#">En savoir plus</a>
                            </div>
                            <div class="col-lg-6 col-xl-3 inset-xl-top-80 position-relative not-animated" data-caption-animate="fadeIn" data-caption-delay="300">
                                <div class="slide-image-wrapper">
                                    <img src="images/broderie-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="width: 1349px;">
                    <div class="container">
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-lg-4 col-xl-4 inset-xl-top-170 text-left not-animated" data-caption-animate="fadeIn" data-caption-delay="200">
                                <h1 class="text-transparent-big text-left">Top</h1>
                                <h2 class="bit-text-subtitle text-decor-left text-left offset-top-20">
                                    <span class="d-block font-weight-light text-white">Serigraphie</span>
                                    <span class="d-block font-weight-light text-white">Industry</span>
                                </h2>
                                <a class="button button-lg button-secondary button-zakaria" href="#">En Savoir Plus</a>
                            </div>
                            <div class="col-lg-6 col-xl-3 inset-xl-top-80 position-relative not-animated" data-caption-animate="fadeIn" data-caption-delay="300">
                                <div class="slide-float-items-2">
                                    <img src="" alt="">
                                </div>
                                <div class="slide-image-wrapper">
                                    <img src="images/ordi.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
            </div>
            <!-- Swiper Navigation-->
            <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
                <i class="fas fa-arrow-right"></i>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </section>


    <!-- Welcome section -->
    <section class="section section-inset-2 bg-default text-md-left">
        <div class="container">
            <div class="row row-30 align-items-center justify-content-center justify-content-xl-between">
                <div class="col-md-5 col-lg-6 wow fadeInLeft">
                    <div class="intro-wrapper">
                        <img src="images/paper.jpg" alt="" width="570" height="410">
                        <div class="quality-label">
                            <span>100%</span>
                            <span>quality</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5 text-left">
                    <div class="text-decor-right">
                        <h2 class="wow fadeInRight" data-wow-delay=".1s">Welcome</h2>
                        <h4 class="title-style-12 wow fadeInRight offset-top-20">To Ekem's Creative</h4>
                    </div>
                    <p class="offset-top-10 wow fadeInRight" data-wow-delay=".2s">For the last 20 years, we have been taking pride in the products we create for our customers to make their business more successful and give them low prices and top quality products.</p>
                    <div class="btn-group-1 wow fadeInRight" data-wow-delay=".3s">
                        <div class="team-navy"><a class="button-default-outline button" href="#">read more</a></div>
                        <div class="team-navy-status"><a href="#">get in touch</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section parallax-container parallax-disabled" data-parallax-img="images/wild-4.jpg" style="background-image: url(images/wild.jpg);">
        <div class="material-parallax parallax">
            <img src="images/wild-4.jpg" alt="" style="display: block; transform: translate3d(-50%, 193px, 0px);">
        </div>
        <div class="parallax-content section-xxl context-dark">
            <div class="container">
                <div class="row row-30 box-ordered">
                    <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".3s">
                        <article class="box-icon-modern">
                            <div class="box-icon-modern-header">
                                <div class="box-icon-modern-count box-ordered-item"></div>
                                <div class="box-icon-modern-icon icon icon-secondary icon-lg">
                                    <i class="fas fa-print"></i>
                                </div>
                            </div>
                            <h4 class="box-icon-modern-title"><a href="#">Impression</a></h4>
                            <p class="box-icon-modern-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel sem tincidunt, ut accumsan libero vestibulum.</p>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".2s">
                        <article class="box-icon-modern">
                            <div class="box-icon-modern-header">
                                <div class="box-icon-modern-count box-ordered-item"></div>
                                <div class="box-icon-modern-icon icon icon-secondary icon-lg">
                                    <i class="fas fa-paint-brush" style="color: #FFD43B;"></i> <!-- Sérigraphie -->
                                </div>
                            </div>
                            <h4 class="box-icon-modern-title"><a href="#">Serigraphie</a></h4>
                            <p class="box-icon-modern-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel sem tincidunt, ut accumsan libero vestibulum.</p>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".1s">
                        <article class="box-icon-modern">
                            <div class="box-icon-modern-header">
                                <div class="box-icon-modern-count box-ordered-item"></div>
                                <div class="box-icon-modern-icon icon icon-secondary icon-lg">
                                    <i class="fas fa-tshirt"></i> <!-- Broderie -->
                                </div>
                            </div>
                            <h4 class="box-icon-modern-title"><a href="#">Broderie</a></h4>
                            <p class="box-icon-modern-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel sem tincidunt, ut accumsan libero vestibulum.</p>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-3 wow fadeInLeft">
                        <article class="box-icon-modern">
                            <div class="box-icon-modern-header">
                                <div class="box-icon-modern-count box-ordered-item"></div>
                                <div class="box-icon-modern-icon icon icon-secondary icon-lg">
                                    <i class="fas fa-magic" style="color: #FFD43B;"></i> <!-- Conception graphique -->
                                </div>
                            </div>
                            <h4 class="box-icon-modern-title"><a href="#">conception de design</a></h4>
                            <p class="box-icon-modern-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel sem tincidunt, ut accumsan libero vestibulum.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Realisations / Gallery -->
    <section class="section section-xxl bg-default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="wow fadeScale">Notre Gallery</h2>
                </div>
                <?php
                    $right_image_path = 'backend/' ;
                    include 'config/realisation.php';
                ?>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="section section-xxl bg-default bg-gradient-1">
        <div class="container">
            <h3 class="font-weight-regular">Témoignages</h3>
            <div class="row row-lg row-30 justify-content-center">
                <?php echo getTestimonials($conn); ?>
            </div>
        </div>
    </section>



    <!-- FAQ -->
    <section class="section section-lg bg-default text-md-left bg-gray-light">
        <div class="container">
            <div class="row row-30 justify-content-center align-items-md-center">
                <div class="col-sm-12 col-md-8 col-lg-6 wow fadeInLeft">
                    <div class="inset-xl-right-20">
                        <div class="intro-wrapper text-center">
                            <img src="images/faq-1-550x519.jpg" alt="" width="550" height="519">
                            <div class="label-img">
                                <img src="images/floating-img-1-200x200.jpg" alt="" width="200" height="200">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 wow fadeInRight">
                    <h3 class="font-weight-light wow fadeInRight">Demandes Frequentes</h3>
                    <h2 class="offset-top-0 wow fadeInRight" data-wow-delay=".1s">Questions</h2>
                    <!-- Bootstrap collapse-->
                    <div class="card-group-custom card-group-custom-1 card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate wow fadeInRight" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a id="accordion1-card-head-veaognkf" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-jnrogyge" aria-controls="accordion1-card-body-jnrogyge" aria-expanded="false" role="button" class="collapsed">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit ?
                                        <div class="card-arrow"><div class="icon fas fa-chevron-right"></div></div>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="accordion1-card-body-jnrogyge" aria-labelledby="accordion1-card-head-veaognkf" data-parent="#accordion1" role="tabpanel" style="">
                                <div class="card-body">
                                    <p>Sed pulvinar lacus vel sem tincidunt, ut accumsan libero vestibulum.
                                        Nullam fermentum, mi nec viverra convallis, nulla leo efficitur est, non viverra magna ex vel risus.
                                        Maecenas et risus sed libero congue ultrices.
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate wow fadeInRight" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-erlbqyly" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-cjlxndnp" aria-controls="accordion1-card-body-cjlxndnp" aria-expanded="false" role="button">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit ?
                                        <div class="card-arrow">
                                            <div class="icon fas fa-chevron-right">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="accordion1-card-body-cjlxndnp" aria-labelledby="accordion1-card-head-erlbqyly" data-parent="#accordion1" role="tabpanel">
                                <div class="card-body">
                                    <p>Sed pulvinar lacus vel sem tincidunt, ut accumsan libero vestibulum.
                                        Nullam fermentum, mi nec viverra convallis, nulla leo efficitur est, non viverra magna ex vel risus.
                                        Maecenas et risus sed libero congue ultrices.
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-wdlqmxrs" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-yfiovxmv" aria-controls="accordion1-card-body-yfiovxmv" aria-expanded="false" role="button">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit ?
                                        <div class="card-arrow">
                                            <div class="icon fas fa-chevron-right">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="accordion1-card-body-yfiovxmv" aria-labelledby="accordion1-card-head-wdlqmxrs" data-parent="#accordion1" role="tabpanel">
                                <div class="card-body">
                                    <p>Sed pulvinar lacus vel sem tincidunt, ut accumsan libero vestibulum.
                                        Nullam fermentum, mi nec viverra convallis, nulla leo efficitur est, non viverra magna ex vel risus.
                                        Maecenas et risus sed libero congue ultrices.
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Produits -->
    <section class="section section-xxl bg-default">
        <div class="container">
            <h2 class="text-transform-capitalize wow fadeScale">Nos Produits</h2>
            <?php
            global $conn;

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

            $conn->close();
            echo "<div class='row row-30 row-lg-50'>" . $output . "</div>";
            ?>

        </div>
    </section>


    <?php
    include 'config/footer.php';
    include 'config/get_script.php';
    $conn->close();
    ?>

    <!-- Votre autre script -->
    <script src="js/script.js"></script>
    <script src="get_script.php"></script>
    <?php include 'config/get_script.php' ?>

</body>

</html>




