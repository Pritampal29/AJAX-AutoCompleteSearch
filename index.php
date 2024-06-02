<?php

include ('dbcon.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        ul{
            background-color: aliceblue;
            width: 175px;
        }
        li{
            cursor:pointer;
            border-bottom: 1px solid #000;
            padding:5px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container py-5 text-center">
        <div class="row">
            <div id="load_data" class="data">
                <div class="jumbotron bg-dark text-white py-5 mb-4">
                    <h1>Dashboard</h1>
                </div>
                <div class="form col-md-4 mx-auto">
                    <label for="search">Search Here :</label>
                    <input class="form-control" type="text" name="search" id="searchId">

                    <div id="name-list"></div>
                </div>
            </div>
        </div>
    </div>


    <script src="jquery.min.js"></script>
    <script src="ajax.js"></script>
</body>

</html>