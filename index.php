<?php
session_start();
require_once 'connection.php';

include_once 'includes/head.php';
include_once 'includes/header.php';

// Get categories
$sql = "SELECT * FROM categories";
$query = mysqli_query($con, $sql);
$categories = mysqli_fetch_all($query, MYSQLI_ASSOC);

$categories = array_chunk($categories, 3);

?>

<div class="container mt-4">
<?php
    foreach ($categories as $categoryRow) { ?>
        <div class="row">
    <?php
        foreach ($categoryRow as $category) { ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <p><a href="category.php?id=<?= $category['id'] ?>"><?= $category['name']; ?></a></p>
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

