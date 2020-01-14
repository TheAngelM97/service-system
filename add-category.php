<?php
session_start();
require_once 'connection.php';

include_once 'includes/head.php';
include_once 'includes/header.php';
?>
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="store-category.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>
