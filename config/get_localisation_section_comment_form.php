<?php include 'get_css.php' ?>

<section class="section">
    <div class="google-map-container lazy-loaded px-5" style="background-color: #e1e1e1;">
        <div class="row justify-content-center comment-bg">
            <div class="col-lg-7 col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.063782439745!2d11.5189535!3d3.7962702999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bd1a2e24a511d%3A0x8d206c1ae5cc2402!2sEKEM&#39;S%20CREATIVE%20Sarl!5e0!3m2!1sfr!2scm!4v1717604691044!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-5 col-md-12 comment-round d-flex flex-column align-items-center">
                <div class="comment_card">
                    <span class="comment_title">Laisser un commentaire/avis</span>
                    <form class="comment_form" method="post" action="config/comment_form.php">
                        <div class="comment_form_group">
                            <input placeholder="" type="text" id="nom" name="nom" required="required">
                            <label for="nom">Votre nom</label>
                        </div>
                        <div class="comment_form_group">
                            <input placeholder="" type="text" id="structure" name="structure" required="required">
                            <label for="structure">Votre Structure/Entreprise</label>
                        </div>
                        <div class="comment_form_group">
                            <input placeholder="" type="number" id="etoiles" name="etoiles" min="0" max="5" step="1" required="required">
                            <label for="etoiles">Nombre d'étoiles (de 1 à 5)</label>
                        </div>
                        <div class="comment_form_group">
                            <textarea placeholder="" id="comment" name="comment" rows="5" required="required"></textarea>
                            <label for="comment">Votre commentaire</label>
                        </div>
                        <button type="submit">Commenter</button>
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