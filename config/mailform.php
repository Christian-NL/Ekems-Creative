<?php
global $conn;
// Inclure le fichier de connexion à la base de données
include_once("AdminSpace/config/");

// Vérifier que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $mail = $_POST['email'];

    // Préparer la requête SQL avec des paramètres anonymes
    $sql = "INSERT INTO abonnes (mail) VALUES (?)";
    $stmt = $conn->prepare($sql);

    // Liage des paramètres avec la méthode bindParam()
    $stmt->bind_param("s", $mail);

    // Exécution de la requête
    if ($stmt->execute()) {
        echo "Vous avez souscris à notre Newsletter !";
        echo "<script>history.back();</script>";
    } else {
        if ($stmt->errno == 1062 && strpos($stmt->error, "mail") !== false) {
            echo "Erreur : cette adresse e-mail est déjà utilisée."; // Message d'erreur de contrainte d'unicité sur mail
            header("Location: $_SERVER[HTTP_REFERER]");
        } else {
            echo "Erreur lors de la souscription ! Veuillez réessayer : " . $stmt->error; // Message d'erreur générique
            header("Location: $_SERVER[HTTP_REFERER]");
        }    
    }

    // Fermer la connexion et la déclaration
    $stmt->close();
    $conn->close();
}
?>