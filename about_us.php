<?php  ?>

<!DOCTYPE html>
<html lang="fr">

<?php
global $conn;
include_once 'backend/config/db.php';
include 'config/get_testimonials.php';
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

    include 'config/get_head.php' ;
    include 'config/get_css.php' ;
?>

<body>

    <?php
        include 'config/get_nav.php' ;
        include 'config/header_second.php' ;
    ?>
    <?php include 'config/get_about_section.php'?>
    <?php include 'config/get_our_history.php' ?>
    <?php include 'config/get_team_member.php'; ?>
    <section class="section section-xxl bg-default" style="background-color: #e1e1e1;">
        <div class="container">
            <h3 class="font-weight-regular">Témoignages</h3>
            <div class="row row-lg row-30 justify-content-center">
                <?php echo getTestimonials($conn); ?>
            </div>
        </div>
    </section>
    <?php include "config/footer.php";
    include 'config/get_script.php';
    $conn->close(); ?>
</body>

<!-- Votre autre script -->
<script src="js/script.js"></script>
<script src="get_script.php"></script>
<?php include 'config/get_script.php' ?>

</html>