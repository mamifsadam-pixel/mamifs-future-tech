<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
}

?>

<h1>Welcome to Mamifs Future Tech</h1>

<p>Hello <?php echo $_SESSION['user']; ?></p>

<a href="logout.php">Logout</a>
