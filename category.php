<?php
session_start();
require_once 'connection.php';

include_once 'includes/head.php';
include_once 'includes/header.php';

// Get category
$sql = "SELECT * FROM categories WHERE id = {$_GET['id']}";
$query = mysqli_query($con, $sql);
$category = mysqli_fetch_assoc($query);

// Get services
$servicesSql = "SELECT * FROM services WHERE category_id = {$_GET['id']}";
$servicesQuery = mysqli_query($con, $servicesSql);
$services = mysqli_fetch_all($servicesQuery, MYSQLI_ASSOC);

$services = array_chunk($services, 3);
?>

    <div class="container mt-4">
        <div class="card mb-4">
            <div class="card-header">
                <h1><?= $category['name']; ?></h1>
            </div>
        </div>

        <?php
        foreach ($services as $serviceRow) { ?>
            <div class="row">
                <?php
                foreach ($serviceRow as $service) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <p><a href="service.php?id=<?= $service['id'] ?>"><?= $service['name']; ?></a></p>
                            </div>
                        </div>
                    </div>
                    <?php
                } ?>
            </div>
            <?php
        } ?>
    </div>
<?php
include_once 'includes/footer.php';
?>