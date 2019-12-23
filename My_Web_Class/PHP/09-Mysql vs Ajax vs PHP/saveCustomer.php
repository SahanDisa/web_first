<?php

$customerID = $_GET['cusID'];
$customerName = $_GET['cusName'];
$customerAddress = $_GET['cusAddress'];
$customerSalary = $_GET['cusSalary'];
$option = $_GET['option'];


$connection = mysqli_connect("127.0.0.1", "root", "", "phppos", "3306");
if (!$connection) {
    echo mysqli_connect_error();
} else {
    switch ($option) {
        case "add":
            //    this is for adding a customer
            $resp = mysqli_query($connection, "INSERT INTO Customer VALUES('$customerID','$customerName','$customerAddress',$customerSalary)");
            echo $resp;
            break;
        case "delete":
            //    this is for delete customers
            $resp = mysqli_query($connection, "delete from Customer where id='$customerID'");
            echo $resp;
            break;
        case "update":
            //   this is for updating a customer
            $resp = mysqli_query($connection, "Update Customer set name='$customerName',address='$customerAddress',salary=$customerSalary where id='$customerID'");
            echo $resp;
            break;
        case "search":
            //   this is for search customer
            $resp = mysqli_query($connection, "Select * from Customer where id='$customerID'");
            $customer = mysqli_fetch_assoc($resp);
            echo json_encode($customer);
            break;
        case "getall":
            //    this is for view a customer
            $resp = mysqli_query($connection, "select * from Customer");
            $array = mysqli_fetch_all($resp);
            echo json_encode($array);
            break;


    }


}

