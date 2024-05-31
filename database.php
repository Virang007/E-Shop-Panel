<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="wonapi";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


<!-- // $servername = "sql112.infinityfree.com";
// $username = "if0_36603450";
// $password = "6VN1p0yL9b";
// $database ="if0_36603450_flutter";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   // echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// } -->

<!-- dominame = myorder.000.pe -->
<!-- MySQL DB Name	MySQL User Name	MySQL Password	MySQL Host Name	PHPMyAdmin
if0_36603450_flutter	if0_36603450	(Your vPanel Password)	sql112.infinityfree.com -->