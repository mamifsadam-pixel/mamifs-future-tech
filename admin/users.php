<?php
include "../config.php";

$result = mysqli_query($conn,"SELECT * FROM users");
?>

<h2>Registered Users</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['email']; ?></td>

<td>
<a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>
