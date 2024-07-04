
<!DOCTYPE html>
<html lang="fr">

<?php include 'head.php'; ?>
<body class="sb-nav-fixed">

<?php include 'nav.php'; ?>

<div id="layoutSidenav">
    <?php include 'sidebar.php'; ?>
    <div id="layoutSidenav_content">



        <?php
            include 'config/db.php';
            include 'pages/all_admin.php';
            include 'footer.php';
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>
