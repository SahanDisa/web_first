<?php
session_start();
$username = $_POST["userName"];
$password = $_POST["passWord"];


if ($username == "admin" && $password == "admin") {
    if (!isset($_SESSION['user'])) {
        $_SESSION['user'] = "ijse";
        header("Location:homepage.php");
    } else {
        header("Location:homepage.php");
    }
} else {
    header("Location:index.php");
}
