<?php
session_start();
require_once 'connection.php';

include_once 'includes/head.php';
include_once 'includes/header.php';

// Get categories
$sql = "SELECT * FROM services WHERE user_id = {$_SESSION['user']['id']}";
$query = mysqli_query($con, $sql);
$services = mysqli_fetch_all($query, MYSQLI_ASSOC);

$services = array_chunk($services, 3);

?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="add-service.php" class="btn btn-primary">Add service</a>
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
                            <h3><a href="service.php?id=<?= $service['id'] ?>"><?= $service['name']; ?></a></h3>
                            <p><a href="edit-service.php?id=<?= $service['id'] ?>">Edit</a></p>
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

