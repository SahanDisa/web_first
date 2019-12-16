<?php
/**
 * Created by IntelliJ IDEA.
 * User: sanu-vithanage
 * Date: 12/1/18
 * Time: 9:27 AM
 */

echo "<h1>I Got the Request and this is my Response for you..</h1><br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
//echo var_dump($_SERVER);
echo var_dump($_GET);echo "<br>";

echo $_GET['customerID'];echo "<br>";
echo $_GET['customerName'];echo "<br>";
echo $_GET['customerAddress'];echo "<br>";
echo $_GET['customerSalary'];echo "<br>";


