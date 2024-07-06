<?php

// Requête SQL pour récupérer les témoignages triés par date
$sql = "SELECT * FROM temoignages ORDER BY date_enregistrement DESC LIMIT 3";
$result = $conn->query($sql);
$output = "";

if ($result->num_rows > 0) {
    // Parcourir les résultats et afficher chaque témoignage
    while($row = $result->fetch_assoc()) {
        $output .= '<div class="col-sm-6 col-lg-4">';
        $output .= '<!-- Commentaire du témoignage -->';
        $output .= '<article class="quote-creative">';
        $output .= '<div class="quote-creative-text">';
        $output .= '<div class="q">' . $row['commentaire'] . '</div>';
        $output .= '</div>';
        $output .= '<div class="quote-creative-rating">';
        for ($i = 0; $i < $row['etoiles']; $i++) {
            $output .= '<span class="icon mdi mdi-star"></span>';
        }
        for ($i = 0; $i < 5 - $row['etoiles']; $i++) {
            $output .= '<span class="icon mdi mdi-star-outline"></span>';
        }
        $output .= '</div>';
        $output .= '<div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">';
        $output .= '<div class="unit-body">';
        $output .= '<div class="quote-creative-author">' . $row['nom'] . '</div>';
        $output .= '<div class="quote-creative-author" style="font-weight: smaller; font-style: italic;">chez ' . $row['structure'] . '</div>';
        $output .= '<div class="quote-creative-author">' . $row['date_enregistrement'] . '</div>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</article>';
        $output .= '</div>';
    }
} else {
    $output = "<strong style='font-size: 20px;'>Aucun témoignages pour le moment.</strong>";
}

?>

<section class="section section-xxl bg-default" style="background-color: #e1e1e1;">
    <div class="container">
        <h3 class="font-weight-regular">Témoignages</h3>
        <div class="row row-lg row-30 justify-content-center">
            <?php echo $output; ?>
        </div>
    </div>
</section>
