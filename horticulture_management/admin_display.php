<?php
include("connect.php");
	$query = "SELECT * FROM products";
	echo "<b><h1>ADMIN PANEL</h1></b>";
	echo "<b><h2>LIST OF ITEMS</h2></b>";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		echo "<table>
			<tr> 
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			</tr>";
		while ($row = mysqli_fetch_assoc($result)){
			echo "<b><table>
			<tr> 
			<td>".$row["product_id"]."</td>
			<td>".$row["product_name"]."</td>
			<td>".$row["price"]."</td>
			</tr>";
		}
		echo "</table>";
	}
	else
		echo "<b>No result</b>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body bgcolor="#9999ff">
	<br><a href="admin.php">GO BACK TO HOMEPAGE</a>
</body>
</html>