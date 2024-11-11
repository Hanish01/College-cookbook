<?php
session_start();
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $email, $password]);

    $_SESSION['message'] = "Registration successful!";
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div id="head1">
        <p id="headtext1" style="font-size: 50px;"> College Calorie Cookbook</p>
    </div>
    <div style=" margin-top:100px">
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Register"><br>
    </form>
    <a href="login.php">Already have an account? Login here.</a>
</div>
</body>
</html>
