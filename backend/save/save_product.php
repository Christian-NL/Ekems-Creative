<?php
/*global $conn;
//include("backend/config/session_control.php");
include_once("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the data
    $productName = htmlspecialchars($_POST["productName"]);
    $productPrice = floatval($_POST["productPrice"]);
    $productDescription = htmlspecialchars($_POST["productDescription"]);

    if (isset($_FILES["productImage"])) {
        $targetFolder = "../Image/Produits/";

        // Vérification de l'extension du fichier
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'heif', 'heic'];
        $filename = $_FILES["productImage"]["name"];
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($fileExtension, $allowedExtensions)) {
            die("Extension de fichier non autorisée. Seuls les fichiers JPG, JPEG, PNG, GIF, HEIF et HEIC sont autorisés.");
        }

        // File upload handling
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
        }

        $imageFileType = $_FILES["productImage"]["type"];
        $allowedTypesRegex = '/(\.jpg|\.jpeg|\.png|\.gif|\.heif|\.heic)$/i';

        if (preg_match($allowedTypesRegex, $filename)) {
            $uniqueFileName = uniqid() . '_' . basename($_FILES["productImage"]["name"]);
            $targetFile = $targetFolder . $uniqueFileName;
            move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile);
            $productImagePath = $targetFile;
        } else {
            die("Type de fichier non autorisé. Seuls les fichiers JPG, JPEG, PNG, GIF, HEIF et HEIC sont autorisés.");
        }
    }

    // Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO product (product_name, product_price, product_image_path, product_desc) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdss", $productName, $productPrice, $productImagePath, $productDescription);

    if ($stmt->execute()) {
        echo "Image enregistré avec succès.";
        header("Location: all_product.php");
    } else {
        echo "Erreur lors de l'enregistrement du produit : " . $stmt->error;
    }

    $stmt->close();
}
// fatal error : Uncaught ArgumentCountError. The number of element in the type definition string must match the number of bind variables
// Close the database connection
$conn->close();
*/?>

<?php
global $conn;
// include("backend/config/session_control.php");
include_once("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the data
    $productName = htmlspecialchars($_POST["productName"]);
    $productPrice = floatval($_POST["productPrice"]);
    $productDescription = htmlspecialchars($_POST["productDescription"]);
    $productInformation = htmlspecialchars($_POST["productInformation"]);

    $productImagePath = '';

    if (isset($_FILES["productImage"]) && $_FILES["productImage"]["error"] == 0) {
        $targetFolder = __DIR__ . "/../Image/Produits/";

        // Vérification de l'extension du fichier
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'heif', 'heic'];
        $filename = $_FILES["productImage"]["name"];
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
        if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile)) {
            $productImagePath = "Image/Produits/" . $uniqueFileName;
        } else {
            die("Erreur lors du téléchargement du fichier.");
        }
    }

    // Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO product (product_name, product_price, product_image_path, product_desc, product_other_information) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Erreur de préparation de la requête : " . $conn->error);
    }

    $stmt->bind_param("sdsss", $productName, $productPrice, $productImagePath, $productDescription, $productInformation);

    if ($stmt->execute()) {
        echo "Produit enregistré avec succès.";
        header("Location: ../all_product.php");
        exit();
    } else {
        echo "Erreur lors de l'enregistrement du produit : " . $stmt->error;
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>

