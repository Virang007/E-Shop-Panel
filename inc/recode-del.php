<?php

$id = $_GET['id'];

$sql = $conn->prepare("DELETE  FROM products WHERE pro_id ='$id'");
$sql->execute();
$result = $sql->setFetchMode(PDO::FETCH_ASSOC);
$data =$sql->fetchAll(PDO ::FETCH_OBJ);
foreach ($data as $row);


if ( $row->pro_id !='') {
     
    // echo "<script>alert('update sucess');</script>";
    header("Location: index.php?page=showOrder");
}else{
    header("Location: index.php?page=showOrder");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete Recoded</title>
</head>
<body>
    <h2>delete Recoded</h2>
</body>
</html>