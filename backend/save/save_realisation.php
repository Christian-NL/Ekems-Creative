<?php
global $conn;
//include("../config/session_control.php");
include_once("../config/dbs.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the data
    $realisationTitle = htmlspecialchars($_POST["realisationTitle"]);
    $realisationDescription = htmlspecialchars($_POST["realisationDescription"]);

    $realisationImagePath = '';

    if (isset($_FILES["realisationImage"]) && $_FILES["realisationImage"]["error"] == 0) {
        $targetFolder = __DIR__ . "/../Image/Realisation/";

        // Vérification de l'extension du fichier
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'heif', 'heic'];
        $filename = $_FILES["realisationImage"]["name"];
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($fileExtension, $allowedExtensions)) {
            die("Extension de fichier non autorisée. Seuls les fichiers JPG, JPEG, PNG, GIF, HEIF et HEIC sont autorisés.");
        }

        // File upload handling
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
        }

        $uniqueFileName = uniqid() . '_' . basename($filename);
        $targetFile = $targetFolder . $uniqueFileName;
        if (move_uploaded_file($_FILES["realisationImage"]["tmp_name"], $targetFile)) {
            $realisationImagePath = "Image/Realisation/" . $uniqueFileName;
        } else {
            die("Erreur lors du téléchargement du fichier.");
        }
    }

    // Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO realisation (realisation_title, image_path, realisation_desc) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Erreur de préparation de la requête : " . $conn->error);
    }

    $stmt->bind_param("sss", $realisationTitle, $realisationImagePath, $realisationDescription);

    if ($stmt->execute()) {
        echo "Image enregistré avec succès.";
        header("Location: ../all_realisation.php");
        exit();
    } else {
        echo "Erreur lors de l'enregistrement : " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
