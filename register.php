<?php
include "config.php";

if(isset($_POST['register'])){

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users(fullname,email,password)
VALUES('$fullname','$email','$password')";

mysqli_query($conn,$sql);

header("Location: login.php");

}
?>

<form method="POST">

<h2>Register - Mamifs Future Tech</h2>

<input type="text" name="fullname" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="register">Register</button>

</form>
