<?php
global $conn;
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tableau de Bord</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Tableau de Bord</li>
            <li class="breadcrumb-item active">Les administrateurs</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tous les administrateurs
            </div>
            <div id="abonnes-table" class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Username</th>
                        <th>Numéro de téléphone</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Username</th>
                        <th>Numéro de téléphone</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    if ($conn) {
                        $stmt = $conn->prepare("SELECT nom, username, telephone, date_enregistrement FROM administrateurs");
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . htmlspecialchars($row['nom']) . "</td><td>" . htmlspecialchars($row['username']) . "</td><td>" . htmlspecialchars($row['telephone']) . "</td><td>" . htmlspecialchars($row['date_enregistrement']) . "</td>";
                                echo "<td><button style='background-color: #FF9027; color: white; border: none; padding: 10px 20px; cursor: pointer;' onclick='deleteSubscriber(\"" . htmlspecialchars($row['username']) . "\")'>Supprimer</button></td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'></td></tr>";
                        }

                        $stmt->close();
                        $conn->close();
                    } else {
                        echo "<tr><td colspan='5'>Erreur de connexion à la base de données</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
    function deleteSubscriber(username) {
        if (confirm("Êtes-vous sûr de vouloir supprimer cet administrateur ?")) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "delete/delete_admin.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    alert(this.responseText);
                    window.location.reload();
                }
            };
            xhr.send("username=" + encodeURIComponent(username));
        }
    }
</script>
