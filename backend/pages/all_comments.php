<?php global $conn; ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tableau de Bord</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Tableau de Bord</li>
            <li class="breadcrumb-item active">Tous les Commentaires</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Commentaires
            </div>
            <div id="abonnes-table" class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Noms</th>
                        <th>Structures</th>
                        <th>Notes</th>
                        <th>Commentaires</th>
                        <th>Date d'enregistrement</th>
                        <th>Heure d'enregistrement</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Noms</th>
                        <th>Structures</th>
                        <th>Notes</th>
                        <th>Commentaires</th>
                        <th>Date d'enregistrement</th>
                        <th>Heure d'enregistrement</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php

                    $result = $conn -> query("SELECT nom, structure, etoiles, commentaire, date_enregistrement, heure_enregistrement from temoignages");
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr><td>". $row['nom']. "</td><td>". $row['structure']. "</td><td>". $row['etoiles']. " etoiles</td><td>". $row['commentaire'].
                                "</td><td>". $row['date_enregistrement']. "</td><td>". $row['heure_enregistrement']. "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "";
                    }

                    $conn->close();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>