<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wonapi";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    error_reporting();

    $query = "SELECT * FROM products";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    if ($total != 0) {
      ?>

      <div class="container mt-5">
        <h2 class="text-center">Display All Records</h2>
        <div class="table-responsive">
          <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
              <tr>
                <th scope="col">Product-Id</th>
                <th scope="col">Product-Name</th>
                <th scope="col">Product-Price</th>
                <th scope="col">Product-Desc</th>
                <th scope="col">Product-Image</th>
                <th scope="col" colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($result = mysqli_fetch_assoc($data)) {
                echo "
                <tr>
                  <td>{$result['pro_id']}</td>
                  <td>{$result['pro_name']}</td>
                  <td>{$result['pro_price']}</td>
                  <td>{$result['pro_decs']}</td>
                  <td><img src='{$result['pro_img']}' width='50' height='50'></td>
                  <td>
                    <a href='index.php?page=update&id={$result['pro_id']}' class='fa-solid fa-pen-to-square text-warning'></a>
                    <a href='index.php?page=delete&id={$result['pro_id']}' class='fa-solid fa-trash text-danger ms-2'></a>
                  </td>
                </tr>
                ";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <?php
    } else {
      echo "<div class='container mt-5'><h2 class='text-center'>No records found</h2></div>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Q/2+dBWTiBU5Rl8FGLaINiKQaG7er/nXtg8J2MOR1B+5w1xX5mIkChvZIv8lHX/x" crossorigin="anonymous"></script>
  </body>
</html>
