<?php
session_start();
require_once 'connection.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    $sql = "INSERT INTO reservations (name, email, phone, service_id) VALUES ('{$name}', '{$email}', '{$phone}', {$_GET['id']})";

    if (mysqli_query($con, $sql)) {
        header('Location: service.php?id='.$_GET['id']);
    } else {
        header('Location: service.php?id='.$_GET['id']);
    }
} else {
    header('Location: service.php?id='.$_GET['id']);
}