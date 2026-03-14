<?php
include "../config.php";

$result = mysqli_query($conn,"SELECT * FROM courses");
?>

<h2>Courses</h2>

<table border="1">

<tr>
<th>Name</th>
<th>Price</th>
<th>Duration</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['duration']; ?></td>
</tr>

<?php } ?>

</table>
