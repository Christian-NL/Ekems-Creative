<?php global $conn; ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tableau de Bord</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Tableau de Bord</li>
            <li class="breadcrumb-item active">Les produits</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Produits
            </div>
            <div id="abonnes-table" class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Nom du produit</th>
                        <th>Prix</th>
                        <th>Description du Produit</th>
                        <th>Information supplementaire</th>
                        <th>Date d'enregistrement</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nom du produit</th>
                        <th>Prix</th>
                        <th>Description du Produit</th>
                        <th>Information supplementaire</th>
                        <th>Date d'enregistrement</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    global $conn;

                    $result = $conn -> query("SELECT product_name, product_price, product_desc, product_other_information, product_reg_date from product");
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr><td>". $row['product_name']. "</td><td>". $row['product_price']. "</td><td>". $row['product_desc']. "</td><td>".
                                $row['product_other_information']. "</td><td>". $row['product_reg_date']. "</td>";
                            echo "<td><button style='background-color: #FF9027; color: white; border: none; padding: 10px 20px; cursor: pointer;' onclick='deleteProduct(\"" . $row['product_name'] . "\")'>Supprimer</button></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "";
                    }

                    $conn->close();
                    ?>

                    <script>
                        function deleteProduct(nomProduit) {
                            if (confirm("Êtes-vous sûr de vouloir supprimer ce produit ?")) {
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "delete_product.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function() {
                                    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                        alert(this.responseText);
                                        window.location.reload();
                                    }
                                };
                                xhr.send("nomProduit=" + nomProduit);
                            }
                        }
                    </script>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>