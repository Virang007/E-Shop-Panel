<?php
include('database.php');

$registrationSuccess = false;

if (isset($_POST['submit'])) {

    $useremail = $_POST['email'];
    $userpassword = $_POST['password'];

    $sql = "INSERT INTO users (user_email, user_password) VALUES ('$useremail', '$userpassword')";
    // use exec() because no results are returned
    $conn->exec($sql);

    $registrationSuccess = true;
}
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .card p {
            margin: 0 0 20px;
            font-size: 18px;
        }

        .card input {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .card button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: #007BFF;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        .card button:hover {
            background: #0056b3;
        }

        .success-message {
            color: green;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="card">
        <p>User Login</p>
        <form method="post">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button name="submit">Register Now</button>
        </form>
        <?php
        if ($registrationSuccess) {
            echo '<p class="success-message">Registration successful!</p>';
        }
        ?>
    </div>
</body>

</html>