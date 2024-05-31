<?php
include ('database.php');

$successMessage = "";

if (isset($_POST['submit'])) {

  $filename = $_FILES['uploadfile']['name'];
  $tempname = $_FILES['uploadfile']['tmp_name'];
  $folder = "upload/" . $filename;
  move_uploaded_file($tempname, $folder);

  $proname = $_POST['proname'];
  $proprice = $_POST['proprice'];
  $prodes = $_POST['prodes'];

  $sql = "INSERT INTO products (pro_name, pro_price, pro_decs, pro_img) VALUES ('$proname', '$proprice', '$prodes', '$folder')";
  // use exec() because no results are returned
  $conn->exec($sql);

  $successMessage = "Product added successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50">
            <div class="card-body">
                <h5 class="card-title">Add Product</h5>
                <?php if ($successMessage): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $successMessage; ?>
                    </div>
                <?php endif; ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="proname" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="proname" name="proname" required>
                    </div>
                    <div class="mb-3">
                        <label for="proprice" class="form-label">Product Price</label>
                        <input type="text" class="form-control" id="proprice" name="proprice" required>
                    </div>
                    <div class="mb-3">
                        <label for="prodes" class="form-label">Product Description</label>
                        <input type="text" class="form-control" id="prodes" name="prodes" required>
                    </div>
                    <div class="mb-3">
                        <label for="uploadfile" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="uploadfile" name="uploadfile" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+cvA8k0T5Y8I5t2n5tXUkV7K6I5vv" crossorigin="anonymous"></script>
</body>
</html>
