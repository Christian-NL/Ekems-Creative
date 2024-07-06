<?php ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tableau de Bord</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tableau de Bord</li>
            <li class="breadcrumb-item active">Membres de l'équipe</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Membres de l'equipe
            </div>
            <div id="abonnes-table" class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Poste / Position</th>
                        <th>Chemin d'acces</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Poste / Position</th>
                        <th>Chemin d'acces</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    global $conn;

                    $result = $conn -> query("SELECT member_name, member_image_path, member_position, date_enr from team");
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr><td>". $row['member_name']. "</td><td>". $row['member_position']. "</td><td>".
                                $row['member_image_path']. "</td><td>". $row['date_enr']. "</td>";
                            echo "<td><button style='background-color: #FF9027; color: white; border: none; padding: 10px 20px; cursor: pointer;' onclick='deleteMember(\"" . $row['member_name'] . "\")'>Supprimer</button></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "Aucun Image pour le moment";
                    }

                    $conn->close();
                    ?>

                    <script>
                        function deleteMember(nomMembre) {
                            if (confirm("Êtes-vous sûr de vouloir supprimer ceci ?")) {
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "/Ekems-Creative/backend/delete/delete_team_member.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function() {
                                    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                        alert(this.responseText);
                                        window.location.reload();
                                    }
                                };
                                xhr.send("nomMembre=" + nomMembre);
                            }
                        }
                    </script>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
