<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Admin Dashboard - Mamifs Future Tech</title>
<link rel="stylesheet" href="../css/admin.css">
</head>

<body>

<div class="sidebar">

<h2>Mamifs Admin</h2>

<a href="dashboard.php">Dashboard</a>
<a href="users.php">Users</a>
<a href="courses.php">Courses</a>
<a href="logout.php">Logout</a>

</div>

<div class="content">

<h1>Admin Dashboard</h1>

<p>Welcome <?php echo $_SESSION['user']; ?></p>

<div class="cards">

<div class="card">
<h3>Total Users</h3>
<p>View registered students</p>
</div>

<div class="card">
<h3>Courses</h3>
<p>Manage courses</p>
</div>

<div class="card">
<h3>Website Control</h3>
<p>Manage system</p>
</div>

</div>

</div>

</body>

</html>
