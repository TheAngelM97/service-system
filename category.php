<?php
require_once 'connection.php';

include_once 'includes/head.php';
include_once 'includes/header.php';

// Get category
$sql = "SELECT * FROM categories WHERE id = {$_GET['id']}";
$query = mysqli_query($con, $sql);
$category = mysqli_fetch_assoc($query);
?>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1><?= $category['name']; ?></h1>
            </div>
        </div>
    </div>
<?php
include_once 'includes/footer.php';
?>