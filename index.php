<?php
include 'database.php';
error_reporting(0);

$page_name = $_GET['page'];

if ($page_name == 'register') {
    include 'inc/register-body.php';
}else if ($page_name == 'update') {
    include 'inc/update-order.php';
}else if ($page_name == 'delete') {
    include 'inc/recode-del.php';
}else if ($page_name == 'showOrder') {
    include 'inc/showOrder.php';
}else if ($page_name == 'addOrder') {
    include 'inc/addOrder.php';
}else if ($page_name == 'dashboard') {
    include 'inc/dashboard-body.php';
}else{
    include 'inc/login-body.php';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api</title>
</head>
<body>
    
</body>
</html>