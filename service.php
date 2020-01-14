<?php
session_start();
require_once 'connection.php';

include_once 'includes/head.php';
include_once 'includes/header.php';

// Get category
$sql = "SELECT * FROM services WHERE id = {$_GET['id']}";
$query = mysqli_query($con, $sql);
$service = mysqli_fetch_assoc($query);
?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1><?= $service['name']; ?></h1>
                    </div>
                    <div class="card-body">
                        <p><?= $service['description']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Apply now</h3>
                    </div>
                    <div class="card-body">
                        <form action="store-reservation.php?id=<?= $service['id'] ?>" method="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" name="phone">
                            </div>

                            <button class="btn btn-primary" type="submit">
                                Apply
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once 'includes/footer.php';
?>