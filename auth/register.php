<?php
session_start();
require_once '../connection.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password);

//    Check for email uniqueness
    $sqlEmailCheck = "SELECT * FROM users WHERE email = '{$email}'";
    $queryEmailCheck = mysqli_query($con, $sqlEmailCheck);
    if (mysqli_num_rows($queryEmailCheck) > 0) {
        header("Location: register-form.php");
    }

    $sql = "INSERT INTO users (name, email, password) VALUES ('{$name}', '{$email}', '{$password}')";
    if (mysqli_query($con, $sql)) {
//        Get the user
        $userSql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
        $userQuery = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($userQuery);

        $_SESSION['user'] = $user;
        header("Location: ../index.php");
    } else {
        header("Location: register-form.php");
    }
} else {
    header("Location: register-form.php");
}