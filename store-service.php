<?php
session_start();
require_once 'connection.php';

if (isset($_POST['name']) && isset($_POST['category']) && isset($_POST['description'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $sql = "INSERT INTO services (name, description, category_id, user_id) VALUES ('{$name}', '{$description}', {$category}, {$_SESSION['user']['id']})";

    if (mysqli_query($con, $sql)) {
        header('Location: my-services.php');
    } else {
        header('Location: add-service.php');
    }
} else {
    header('Location: add-service.php');
}