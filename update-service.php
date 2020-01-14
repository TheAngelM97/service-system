<?php
require_once 'connection.php';

if (isset($_POST['name']) && isset($_POST['category']) && isset($_POST['description'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $sql = "UPDATE services SET name = '{$name}', category_id = '{$category}', description = '{$description}' WHERE id = {$_GET['id']}";

    if (mysqli_query($con, $sql)) {
        header('Location: my-services.php');
    } else {
        header('Location: edit-services.php?id='.$_GET['id']);
    }
} else {
    header('Location: edit-services.php?id='.$_GET['id']);
}