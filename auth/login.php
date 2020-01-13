<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    // Check
    require_once '../connection.php';

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
    $query = mysqli_query($con, $sql);
    $rows = mysqli_num_rows($query);

    if ($rows == 1) {
        $user = mysqli_fetch_assoc($query);

        $_SESSION['user'] = $user;
        header("Location: ../index.php");
    } else {
        header("Location: login-form.php");
    }
} else {
    header("Location: login-form.php");
}