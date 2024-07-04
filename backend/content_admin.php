
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tableau de Bord</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tous les administrateurs</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tous les administrateurs
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Date d'inscription</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Date d'inscription</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <!-- Boucle PHP pour afficher les administrateurs -->
                        <?php
                            // Connexion à la base de données
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "pluralistic";

                            // Créer une connexion
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // Vérifier la connexion
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Requête SQL pour récupérer les administrateurs
                            $sql = "SELECT id, nom, prenom, email, date_inscription FROM administrateurs";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Afficher les données de chaque ligne
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nom"]. "</td><td>" . $row["prenom"]. "</td><td>" . $row["email"]. "</td><td>" . $row["date_inscription"]. "</td><td>Edit | Delete</td></tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>0 results</td></tr>";
                            }
                            $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
