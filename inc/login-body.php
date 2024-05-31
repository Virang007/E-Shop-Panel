<?php
include ('database.php');

if (isset($_POST['submit'])) {
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];

    $select_user ="SELECT * FROM users WHERE user_email = :email AND user_password = :password";
    $sql = $conn->prepare($select_user);
    $sql->bindParam(':email', $user_email);
    $sql->bindParam(':password', $user_password);
    $sql->execute();
    $data = $sql->fetchAll(PDO::FETCH_OBJ);
    
    if ($data) {
        $user_id = $data[0]->id;
        header("Location: index.php?page=dashboard");
    } else {
        header("Location: index.php?page=login");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .card {
            background-color: white;
            width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .card form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card input {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .card button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }
        .card button:hover {
            background-color: #0056b3;
        }
        .card a {
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
        }
        .card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>User Login</h2>
        <form method="post">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button name="submit">Login</button>
        </form>
        <a href="index.php?page=register">Don't have an account? Register</a>
    </div>
</body>
</html>
