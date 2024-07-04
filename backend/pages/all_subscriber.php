<?php global $conn; ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tableau de Bord</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tableau de Bord</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Abonnes
            </div>
            <div id="abonnes-table" class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Adresse Mail</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Adresse Mail</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    global $conn;

                    $result = $conn -> query("SELECT mail, subscription_date from subscriber");
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr><td>". $row['mail']. "</td><td>". $row['subscription_date']. "</td>";
                            echo "<td><button style='background-color: #FF9027; color: white; border: none; padding: 10px 20px; cursor: pointer;' onclick='deleteSubscriber(\"" . $row['mail'] . "\")'>Supprimer</button></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "";
                    }

                    $conn->close();
                    ?>

                    <script>
                        function deleteSubscriber(mail) {
                            if (confirm("Êtes-vous sûr de vouloir supprimer ce service ?")) {
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "../delete/delete_subscriber.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function() {
                                    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                        alert(this.responseText);
                                        window.location.reload();
                                    }
                                };
                                xhr.send("mail=" + mail);
                            }
                        }
                    </script>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>