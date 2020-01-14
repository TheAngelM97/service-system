<?php
session_start();
require_once 'connection.php';

include_once 'includes/head.php';
include_once 'includes/header.php';

// Get categories
$sql = "SELECT * FROM categories";
$query = mysqli_query($con, $sql);
$categories = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="store-service.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                    <?php foreach($categories as $category) { ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php  } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="8" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>
