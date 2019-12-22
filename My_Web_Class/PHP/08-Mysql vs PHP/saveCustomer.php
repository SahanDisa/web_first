<?php

$customerID = $_GET['cusID'];
$customerName = $_GET['cusName'];
$customerAddress = $_GET['cusAddress'];
$customerSalary = $_GET['cusSalary'];


$connection = mysqli_connect("127.0.0.1", "root", "", "phppos", "3306");
if (!$connection) {
    echo mysqli_connect_error();
} else {
//    this is for adding a customer
    $resp = mysqli_query($connection, "INSERT INTO Customer VALUES('$customerID','$customerName','$customerAddress',$customerSalary)");
    if ($resp > 0) {
        echo "<h1 class='alert-success'>$customerID Added to the Database ..!</h1>";
    } else {
        echo "<h1 class='alert-danger'>$customerID Not Added the Database ..!</h1>";
    }


//    this is for view a customer
    $resp = mysqli_query($connection, "select * from Customer");
    $array = mysqli_fetch_all($resp);
    echo '<link rel="stylesheet" href="css/bootstrap.min.css">';
    echo "<div class='row' style='margin-top: 10px'>";
    echo "<div class='offset-3 col-6'>";
    echo "<table class='table table-bordered table-hover'>";
    echo "<thead class='bg-danger'>";
    echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Salary</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($array as $t) {
        echo "<tr>";
        echo "<td>" . $t[0] . "</td>";
        echo "<td>" . $t[1] . "</td>";
        echo "<td>" . $t[2] . "</td>";
        echo "<td>" . $t[3] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "<table>";
    echo "</div>";
    echo "</div>";
}