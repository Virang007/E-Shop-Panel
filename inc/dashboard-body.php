<?php
include ('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .card p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .card a {
            display: block;
            padding: 10px;
            margin: 10px 0;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .so {
            background-color: springgreen;
            color: black;
        }
        .lo {
            background-color: red;
            color: white;
        }
        .so:hover, .lo:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="card">
        <p>Welcome to Dashboard</p>
        <a class="so" href="index.php?page=showOrder">Show All Orders</a>
        <a class="so" href="index.php?page=addOrder">Add New Order</a>
        <a class="lo" href="#">Logout</a>
    </div>
</body>
</html>
