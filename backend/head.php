<?php

function getTitle() {
    $current_page = basename($_SERVER['PHP_SELF']);

    switch ($current_page) {
        case 'Dashboard.php':
            return "Dashboard|Ekem's Creative";
        case 'all_product.php':
            return "Tous les produits|Ekem's Creative";
        case 'all_admin.php':
            return "Tous les Administrateurs|Ekem's Creative";
        case 'all_realisation.php':
            return "Toutes les realisations|Ekem's Creative";
        case 'all_subscriber.php':
            return "Tous les abonnes|Ekem's Creative";
        case 'all_staff_members.php':
            return "Les membres du staff|Ekem's Creative";
        case 'all_comments.php':
            return "Tous les commentaires|Ekem's Creative";
        default:
            return "Ekem's Creative";
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- META Tags for SEO -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Ekem's Creative , MANI Entreprises">

    <title><?php echo getTitle(); ?></title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <style>
        html, body {
            height: 100%;
        }

        #layoutSidenav_content {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        main {
            flex: 1;
            overflow-y: auto;
        }

        footer {
            flex-shrink: 0;
        }
    </style>
</head>



