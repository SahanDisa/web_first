<?php
$username = $_POST["userName"];
$password = $_POST["passWord"];


if ($username == "admin" && $password == "admin") {
    if (!isset($_COOKIE["USER"])) {
        setcookie("USER", "ADMIN", time() +24*60*60);
        header("Location:homepage.php");
    } else {
        header("Location:homepage.php");
    }
} else {
    header("Location:index.php");
}
