<html>
<head>
    <title>Require vs Include</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        header{
            height: 100px;
            background-color: darkcyan;
        }

        header ul li{
            list-style: none;
            display: inline-block;
            color: white;
            padding: 10px;
        }
        header ul{
            position: absolute;
            right: 10px;
        }

        footer{
            width: 100%;
            height: 50px;
            background-color: steelblue;
            color: white;
            position: absolute;
            bottom: 0;
            text-align: center;
        }

        footer h3{
            font-size: 20px;
            padding: 0;
            margin: 0;
        }

        main section{
            position: relative;
            width: 100%;
            min-height: 450px;
        }

        main section nav{
            position: absolute;
            width: 20%;
            left: 0;
            background-color: cadetblue;
            min-height: 500px;
        }


        main section div{
            position: absolute;
            width: 80%;
            right: 0;
            min-height: 500px;
        }

    </style>
</head>
<body>
<!--this is header-->
<?php require_once "header.php";?>
<main>
    <section>
<!--this is main_navs location-->
        <?php include "main_nav.php";?>
        <div>
            <h1>Require vs Include</h1>

        </div>
    </section>
</main>
<!--this is footers location-->
<?php include "footer.php"?>
</body>
</html>