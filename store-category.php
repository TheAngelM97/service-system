<?php
require_once 'connection.php';

if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);

    $sql = "INSERT INTO categories (name, user_id) VALUES ('{$name}', {$_SESSION['user']['id']})";

    if (mysqli_query($con, $sql)) {
        header('Location: index.php');
    } else {
        header('Location: add-category.php');
    }
} else {
    header('Location: add-category.php');
}