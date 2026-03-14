<?php
session_start();
include "config.php";

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";

$result = mysqli_query($conn,$sql);

$user = mysqli_fetch_assoc($result);

if($user && password_verify($password,$user['password'])){

$_SESSION['user'] = $user['fullname'];

header("Location: dashboard.php");

}else{

echo "Invalid login";

}

}
?>

<form method="POST">

<h2>Login - Mamifs Future Tech</h2>

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button name="login">Login</button>

</form>
