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

$conn->close();
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
                    <p><?php echo $product['product_description']; ?></p>
                    <hr class="hr-gray-100">
                    <div class="group-xs group-middle">
                        <div class="product-stepper">
                            <div class="stepper">
                                <input class="form-input stepper-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                <span class="stepper-arrow up"><i class="stepper-arrow fas fa-plus"></i></span>
                                <span class="stepper-arrow down"><i class="stepper-arrow fas fa-minus"></i></span>
                            </div>
                        </div>
                        <div><a class="button button-lg button-secondary button-zakaria" href="cart-page.html">Ajouter au panier</a></div>
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
                    <li class="nav-item" role="presentation"><a class="nav-link active show" href="#tabs-1-1" data-toggle="tab">Reviews</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Information</a></li>
                </ul>
            </div>
            <!-- Tab panes-->
            <div class="tab-content tab-content-1">
                <div class="tab-pane fade active show" id="tabs-1-1">
                    <!-- Product Reviews-->
                    <div class="box-comment">
                        <div class="unit flex-column flex-md-row unit-spacing-md">
                            <div class="unit-left">
                                <div class="box-comment-image">
                                    <img src="images/user-1-42x42.jpg" alt="" width="42" height="42">
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="group-sm group-justify">
                                    <div>
                                        <div class="group-xs group-middle">
                                            <h5 class="box-comment-author">Eleanor Jennings</h5>
                                            <div class="box-rating">
                                                <span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-comment-time">
                                        <time datetime="2020-03-15">1 day ago</time>
                                    </div>
                                </div>
                                <p class="box-comment-text">I purchased this bed for my daughter and she loves it! I was worried that the design might be a little girly, but it's actually quite neutral and fits in perfectly with her room decor. The bed itself is sturdy and was easy to assemble. Highly recommend!</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-comment">
                        <div class="unit flex-column flex-md-row unit-spacing-md">
                            <div class="unit-left">
                                <div class="box-comment-image">
                                    <img src="images/user-2-42x42.jpg" alt="" width="42" height="42">
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="group-sm group-justify">
                                    <div>
                                        <div class="group-xs group-middle">
                                            <h5 class="box-comment-author">Eleanor Jennings</h5>
                                            <div class="box-rating">
                                                <span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-comment-time">
                                        <time datetime="2020-03-15">2 days ago</time>
                                    </div>
                                </div>
                                <p class="box-comment-text">I purchased this bed for my daughter and she loves it!
                                    I was worried that the design might be a little girly, but it's actually quite
                                    neutral and fits in perfectly with her room decor. The bed itself is sturdy and
                                    was easy to assemble. Highly recommend!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-2">
                    <h6>Shipping Information</h6>
                    <p>Our bed ships free within the contiguous 48 states. Most orders are delivered within 5-7 business days of purchase. Orders from outside the contiguous 48 states may be subject to additional shipping charges and delays.</p>
                    <h6>Return Policy</h6>
                    <p>If you are not satisfied with your bed, we offer a 30-day return policy. Simply contact our customer service team to initiate a return. Please note that the bed must be in its original condition and packaging for a full refund.</p>
                    <h6>Warranty</h6>
                    <p>We stand behind the quality of our beds with a 5-year limited warranty. This warranty covers any defects in materials or workmanship. For more information, please contact our customer service team.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
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
    });
</script>
