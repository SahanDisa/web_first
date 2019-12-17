<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location:index.php");
}

?>

<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body >
<section class="jumbotron">
    <h1>PHP POS 2018</h1>

    <div class="row" style="margin-top: 100px;margin-left: 200px">
        <div class="col-9">
            <table class="table table-bordered table-hover">
                <thead class="bg-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Salary</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
            <button>Load Customers</button>
        </div>
    </div>
</section>



</body>
</html>