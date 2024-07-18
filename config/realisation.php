<?php

// Récupération des réalisations depuis la base de données
$query = "SELECT realisation_title, image_path, realisation_desc, date_enregistrement FROM realisation ORDER BY date_enregistrement DESC LIMIT 24";
$result = $conn->query($query);

if ($result->num_rows > 0): ?>
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row" id="lightgallery">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <?php $image_path = $right_image_path . $row['image_path']; ?>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card" width="370" height="315">
                            <a href="<?php echo $image_path; ?>" data-lg-size="1600-2400" data-lightgallery="item">
                                <img src="<?php echo $image_path; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['realisation_title']); ?>">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['realisation_title']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($row['realisation_desc']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <p>Aucune réalisation trouvée.</p>
<?php endif;
?>

<style>
    .thumbnail-modern-figure img {
        width: 370px;
        height: 315px;
        object-fit: cover; /* This will ensure the image covers the given dimensions */
    }
</style>


<style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
    .card {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .card-body {
        flex-grow: 1;
    }
</style>