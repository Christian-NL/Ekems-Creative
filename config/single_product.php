<?php

// Obtenir l'ID du produit depuis l'URL
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Requête pour obtenir les détails du produit
$product_query = "SELECT * FROM product WHERE product_id = $product_id";
$product_result = $conn->query($product_query);

if ($product_result && $product_result->num_rows > 0) {
    $product = $product_result->fetch_assoc();
} else {
    echo "<p>Produit non trouvé.</p>";
    exit;
}

?>

<!-- Product Information -->
<section class="section section-sm section-first bg-default">
    <div class="container">
        <div class="row row-30">
            <div class="col-lg-6">
                <div class="slick-vertical slick-product">
                    <!-- Slick Carousel-->
                    <div class="carousel-parent slick-initialized slick-slider" id="carousel-parent" data-items="1" data-swipe="true" data-child="#child-carousel" data-for="#child-carousel">
                        <div aria-live="polite" class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 1596px; transform: translate3d(0px, 0px, 0px);" role="listbox">
                                <div class="item slick-slide slick-current slick-active" style="width: 532px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="0" aria-hidden="false">
                                    <div class="slick-product-figure">
                                        <img src="backend/<?php echo $product['product_image_path']; ?>" alt="" width="530" height="480">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-product">
                    <h3 class="text-transform-none font-weight-medium product-title"><?php echo $product['product_name']; ?></h3>
                    <div class="group-md group-middle">
                        <div class="single-product-price"><?php echo $product['product_price']; ?> XAF</div>
                    </div>
                    <p><?php echo $product['product_desc']; ?></p>
                    <hr class="hr-gray-100">
                    <div class="group-xs group-middle">
                        <div class="product-stepper">
                            <div class="stepper">
                                <input class="form-input stepper-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                <span class="stepper-arrow up"><i class="stepper-arrow fas fa-plus"></i></span>
                                <span class="stepper-arrow down"><i class="stepper-arrow fas fa-minus"></i></span>
                            </div>
                        </div>
                        <div><a class="button button-lg button-secondary button-zakaria" href="#">Ajouter au panier</a></div>
                    </div>
                    <hr class="hr-gray-100">
                    <div class="group-xs group-middle"><span class="list-social-title">Partager ce produit : </span>
                        <div>
                            <ul class="list-inline list-social list-inline-sm">
                                <li><a class="icon mdi mdi-instagram" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a class="icon mdi mdi-twitter" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                <li><a class="icon mdi mdi-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon mdi mdi-facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon mdi mdi-google-plus" href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
            <!-- Nav tabs-->
            <div class="nav-tabs-wrap">
                <ul class="nav nav-tabs nav-tabs-1">
                    <li class="nav-item" role="presentation"><a class="nav-link active show" href="#tabs-1-1" data-toggle="tab">Details supplementaires</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Information de Ekem's Creative</a></li>
                </ul>
            </div>
            <!-- Tab panes-->
            <div class="tab-content tab-content-1">
                <div class="tab-pane fade active show" id="tabs-1-1">
                    <!-- Product Reviews-->
                    <div class="box-comment">
                        <div class="unit flex-column flex-md-row unit-spacing-md">
                            <div class="unit-body">
                                <div class="group-sm group-justify">
                                    <div>
                                        <div class="group-xs group-middle">
                                            <h5 class="box-comment-author"><?php echo $product['product_desc']; ?></h5>
                                            <div class="box-rating">
                                                <span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="box-comment-text"><?php echo $product['product_other_information']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-2">
                    <h4>Informations sur la Livraison</h4>
                    <p>Nos services de sérigraphie, broderie et conception de designs sont disponibles pour une livraison gratuite dans la ville de Yaoundé dans la région du Centre Cameroun. La plupart des commandes sont livrées dans un délai de 5 à 7 jours ouvrables après paiement. Les commandes venant des autres villes peuvent être soumises à des frais de livraison et à des délais supplémentaires.</p>
                    </br>
                    <h4>Politique de Retour</h4>
                    <p>Si vous n'êtes pas satisfait de nos services, nous offrons une politique de retour de 30 jours. Contactez simplement notre équipe de service client pour initier un retour. Veuillez noter que les articles doivent être dans leur état d'origine et emballage pour un remboursement complet.</p>
                    </br>
                    <h4>Garantie</h4>
                    <p>Nous garantissons la qualité de nos services avec une garantie limitée de 3 mois. Cette garantie couvre tout défaut de matériaux ou de fabrication. Pour plus d'informations, veuillez contacter notre équipe de service client.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<script>/*
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
    });*/
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Récupérez tous les boutons Ajouter au panier
        const addToCartButton = document.querySelector('.button-zakaria');
        // Récupérez le panier depuis le local storage ou créez un tableau vide s'il n'existe pas
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Ajoutez un événement de clic au bouton Ajouter au panier
        addToCartButton.addEventListener('click', function(e) {
            e.preventDefault();
            const productId = <?php echo $product_id; ?>;
            const productName = "<?php echo addslashes($product['product_name']); ?>";
            const productPrice = "<?php echo $product['product_price']; ?>";

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

            // Mettre à jour le badge du panier (fonction définie dans votre script principal)
            updateCartBadge();
        });

        function updateCartBadge() {
            const cartBadge = document.querySelector('.cart-count');
            const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
            cartBadge.innerText = totalItems;
        }
    });
</script>

<!-- Votre autre script -->
<script src="js/script.js"></script>
<script src="get_script.php"></script>
<?php include 'get_script.php' ?>


