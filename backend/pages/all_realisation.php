<?php global $conn; ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tableau de Bord</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Tableau de Bord</li>
            <li class="breadcrumb-item active">Les Realisations</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Realisations
            </div>
            <div id="abonnes-table" class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Chemin d'acces</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Chemin d'acces</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    global $conn;

                    $result = $conn -> query("SELECT realisation_title, realisation_desc, image_path, date_enregistrement from realisation");
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr><td>". $row['realisation_title']. "</td><td>". $row['realisation_desc']. "</td><td>".
                                $row['image_path']. "</td><td>". $row['date_enregistrement']. "</td>";
                            echo "<td><button style='background-color: #FF9027; color: white; border: none; padding: 10px 20px; cursor: pointer;' onclick='deleteRealisation(\"" . $row['realisation_title'] . "\")'>Supprimer</button></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "";
                    }

                    $conn->close();
                    ?>

                    <script>
                        function deleteRealisation(titreRealisation) {
                            if (confirm("Êtes-vous sûr de vouloir supprimer ceci ?")) {
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "delete_realisation.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function() {
                                    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                        alert(this.responseText);
                                        window.location.reload();
                                    }
                                };
                                xhr.send("titreRealisation=" + titreRealisation);
                            }
                        }
                    </script>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>