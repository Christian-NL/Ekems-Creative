<?php

// Requête pour récupérer les données de la table team
$result = $conn->query("SELECT member_name, member_image_path, member_position, member_description FROM team ORDER BY date_enr LIMIT 20");

// Vérifier si la requête a réussi
if ($result && $result->num_rows > 0) {
    echo "<section class='section section-sm section-last bg-default'>";
    echo "<div class='container'>";
    echo "<div class='row row-lg row-30 justify-content-center'>";

    while ($row = $result->fetch_assoc()) {
        echo "<div class='col-sm-6 col-md-4'>";
        echo "<article class='team-classic box-md'>";
        echo "<a class='team-classic-figure' href='#'><img src='backend/" . $row['member_image_path'] . "' alt='' width='370' height='334'></a>";
        echo "<h4 class='team-classic-name'><a href='#'>" . $row['member_name'] . "</a></h4>";
        echo "<p class='team-classic-text'>" . $row['member_description'] . "</p>";
        echo "<ul class='list-inline team-classic-list-social list-social-2 list-inline-sm'>";
        echo "<li><a class='icon mdi mdi-facebook' href='#'></a></li>";
        echo "<li><a class='icon mdi mdi-whatsapp' href='#'></a></li>";
        echo "<li><a class='icon mdi mdi-twitter' href='#'></a></li>";
        echo "<li><a class='icon mdi mdi-google-plus' href='#'></a></li>";
        echo "</ul>";
        echo "</article>";
        echo "</div>";
    }

    echo "</div>";
    echo "</div>";
    echo "</section>";

} else {
    echo "Aucune entrée n'a été trouvée.";
}

?>
