<?php ?>

<section class="section parallax-container" data-parallax-img="images/wild-5.jpg">
    <div class="material-parallax parallax">
        <img src="images/wild-5.jpg" alt="" style="display: block; transform: translate3d(-50%, 50px, 0px);">
    </div>
    <div class="parallax-content section-xxl context-dark text-md-left">
        <div class="container">
            <div class="row row-30 justify-content-center align-items-center align-items-md-end">
                <div class="col-lg-3">
                    <h3 class="text-spacing-100 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">Rester <span class="font-weight-light">connecte</span>
                    </h3>
                    <p class="wow fadeInLeft" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">Abonnez-vous a notre newsletter</p>
                </div>
                <div class="col-lg-8 col-xl-9 inset-lg-bottom-10">
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform rd-form-inline form-lg rd-form-text-center" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="mailform.php" novalidate="novalidate">
                        <div class="form-wrap wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <input class="form-input form-control-has-validation" id="subscribe-form-0-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="subscribe-form-0-email">Entrez votre addresse mail</label>
                        </div>
                        <div class="form-button wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                            <button class="button button-shadow-2 button-zakaria button-lg button-primary" type="submit">Abonner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Votre autre script -->
<script src="js/script.js"></script>
<script src="get_script.php"></script>
<?php include 'get_script.php' ?>
