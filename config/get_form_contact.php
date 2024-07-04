<?php include 'get_css.php' ?>

<section class="section section-xl bg-default text-md-left">
    <div class="container">
        <div class="title-classic">
            <h3 class="title-classic-title">Ekem's Creative</h3>
            <p class="title-classic-subtitle">Nous sommes disponibles 24/7 par WhatsApp, e-mail ou autre reseau social.
                <br class="d-none d-lg-block">Vous pouvez utiliser nos contacts pour toutes questions relatives a nos services et produits.</p>
        </div>
        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="" novalidate="novalidate">
            <div class="row row-20 row-md-30">
                <div class="col-lg-8">
                    <div class="row row-20 row-md-30">
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input form-control-has-validation" id="contact-first-name-2" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                                <label class="form-label rd-input-label" for="contact-first-name-2">Prenom(s)</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input form-control-has-validation" id="contact-last-name-2" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                                <label class="form-label rd-input-label" for="contact-last-name-2">Nom</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input form-control-has-validation" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                                <label class="form-label rd-input-label" for="contact-email-2">E-mail</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input form-control-has-validation" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric"><span class="form-validation"></span>
                                <label class="form-label rd-input-label" for="contact-phone-2">Tel</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-wrap">
                        <label class="form-label rd-input-label" for="contact-message-2">Message</label>
                        <textarea class="form-input textarea-lg form-control-has-validation form-control-last-child" id="contact-message-2" name="phone" data-constraints="@Required"></textarea><span class="form-validation"></span>
                    </div>
                </div>
            </div>
            <button class="button button-lg button-secondary button-zakaria" type="submit">Envoyer</button>
        </form>
    </div>
</section>

