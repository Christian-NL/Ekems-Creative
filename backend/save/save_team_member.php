<?php
global $conn;
//include("session_control.php");
include_once("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the data
    $productName = htmlspecialchars($_POST["teamMemberName"]);
    $teamMemberPost = htmlspecialchars($_POST["teamMemberPost"]);
    $teamMemberDescription = htmlspecialchars($_POST["teamMemberDescription"]);

    if (isset($_FILES["teamMemberImage"])) {
        $targetFolder = __DIR__ . "/../Image/TeamMember/";

        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'heif', 'heic'];
        $file_name = $_FILES["teamMemberImage"]["name"];
        $fileExtension = pathinfo($file_name, PATHINFO_EXTENSION);

        if (!in_array($fileExtension, $allowedExtensions)) {
            die("Extension de fichier non autorisée. Seuls les fichiers JPG, JPEG, PNG, GIF, HEIF et HEIC sont autorisés.");
        }

        // File upload handling
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
        }

        $uniqueFileName = uniqid() . '_' . basename($file_name);
        $targetFile = $targetFolder . $uniqueFileName;
        if (move_uploaded_file($_FILES["teamMemberImage"]["tmp_name"], $targetFile)) {
            $productImagePath = "Image/TeamMember/" . $uniqueFileName;
        } else {
            die("Erreur lors du téléchargement du fichier.");
        }
    }

    // Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO team (member_name, member_image_path, member_position, member_description) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $productName, $productImagePath, $teamMemberPost ,$teamMemberDescription);

    if ($stmt->execute()) {
        echo "nouveau membre du staff enregistré avec succès.";
        header("Location: ../all_staff_members.php");
    } else {
        echo "Erreur lors de l'enregistrement : " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
