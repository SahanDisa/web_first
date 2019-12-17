<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location:index.php");
}

?>

<html>
<head>
    <title>Customer Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<main class="container-fluid">
    <section class="jumbotron">
        <h1>Customer Page</h1>
        <div class="row">
            <div class="col-6">
                <form action="" class="form-group">
                    <label for="userName">Customer ID</label>
                    <input class="form-control" name="customerID" type="text">
                    <label for="password">Customer Name</label>
                    <input class="form-control" name="customerName" type="text">
                    <label for="password">Customer Address</label>
                    <input class="form-control" name="customerAddress" type="text">
                    <label for="password">Customer Salary</label>
                    <input class="form-control" name="customerSalary" type="text">
                    <button class="btn btn-primary" style="margin-top: 20px" type="submit">Save Customer</button>
                </form>
            </div>
        </div>

    </section>
</main>


</body>
</html>