<?php
include ('database.php');

$id =  $_GET['id'];

$sql = $conn->prepare("SELECT * FROM products WHERE pro_id ='$id'");
$sql->execute();

// set the resulting array to associative
$result = $sql->setFetchMode(PDO::FETCH_ASSOC);
$data =$sql->fetchAll(PDO ::FETCH_OBJ);
foreach ($data as $row);
// $pro_id = $row->pro_id;
// echo $row->pro_id;


if (isset($_POST['submit'])) {

  $filename = $_FILES['uploadfile']['name'];
  $tempname = $_FILES['uploadfile']['tmp_name'];
  $folder ="upload/".$filename;
  move_uploaded_file($tempname,$folder);

  $proname = $_POST['proname'];
  $proprice =$_POST['proprice'];
  $prodes =$_POST['prodes'];
        

    $sql = " UPDATE  products SET pro_name = '$proname',pro_price='$proprice',pro_decs='$prodes',pro_img ='$folder' WHERE pro_id ='$id '";
    // use exec() because no results are returned
    $conn->exec($sql);

    if ( $row->pro_id !='') {
     
        // echo "<script>alert('update sucess');</script>";
        header("Location: index.php?page=showOrder");
    }else{
        header("Location: index.php?page=update");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpDate-Product</title>
</head>
<body>
    <p>Update - product</p><br>
    <form method="post" enctype="multipart/form-data">
        Product_name : <input type="text" value="<?php echo $row->pro_name; ?>" name="proname"><br><br>
        Product_price : <input type="text" value="<?php echo $row->pro_price; ?>" name="proprice"><br><br>
        Product_description : <input type="text" value="<?php echo $row->pro_decs; ?>" name="prodes"><br><br>
        Product_img-1 : <input type="file" value="<?php echo $row->pro_img; ?>" name="uploadfile"><br><br>
       <button name="submit">Update Now</button>
    </form>

    <p>add product sucess fully....</p>
</body>

</html>