<?php
global $conn;

// Récupération des réalisations depuis la base de données
$query = "SELECT realisation_title, image_path, realisation_desc, date_enregistrement FROM realisation LIMIT 24 ORDER BY date_enregistrement DESC";
$result = $conn->query($query);

if ($result->num_rows > 0): ?>
    <section class="section section-xl bg-default">
        <div class="container isotope-wrap">
            <div class="row row-30 isotope" data-lightgallery="group" style="position: relative;">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <?php $image_path = $right_image_path . $row['image_path']; ?>
                    <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2" style="position: absolute;">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-modern-2">
                            <div class="thumbnail-modern-figure">
                                <img src="<?php echo $image_path; ?>" alt="" width="370" height="315">
                            </div>
                            <div class="thumbnail-modern-caption-2">
                                <h4 class="thumbnail-modern-title-2"><a href="#"><?php echo $row['realisation_title']; ?></a></h4>
                                <div class="thumbnail-subtitle"><?php echo $row['realisation_desc']; ?></div>
                                <a class="button fl-bigmug-line-search74" href="<?php echo $row['image_path']; ?>" data-lightgallery="item">
                                    <img src="<?php echo $row['image_path']; ?>" alt="" width="370" height="315">
                                </a>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <p>Aucune réalisation trouvée.</p>
<?php endif;

$conn->close();
?>
