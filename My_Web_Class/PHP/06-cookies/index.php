<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">
<div class="row" style="margin-top: 100px;margin-left: 200px">
    <div class="col-6">
        <form action="checklogin.php" method="post" class="form-group">
            <label for="userName">User Name</label>
            <input class="form-control" name="userName" type="text">
            <label for="password">Pass Word</label>
            <input class="form-control" name="passWord" type="password">
            <button class="btn btn-primary" style="margin-top: 20px" type="submit">Login</button>
        </form>
    </div>
</div>
</body>
</html>