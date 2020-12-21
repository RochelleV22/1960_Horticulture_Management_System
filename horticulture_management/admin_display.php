<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<h1>ADMIN PANEL</h1>
	<h2>LIST OF ITEMS</h2>
</head>
<body bgcolor="#9999ff">
	<?php
	include("connect.php");
	$query = "SELECT * FROM products";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		echo "<table>
			<tr> 
			<th>Product ID</th>
			<th>Image</th>
			<th>Name</th>
			<th>Price (per kg)</th>
			</tr>";
		while ($row = mysqli_fetch_assoc($result)){
			echo "
			<tr> 
			<td>".$row["product_id"]."</td>
			<td><img src='".$row["image"]."' style='width:80px; height:80px;'</td>
			<td>".$row["product_name"]."</td>
			<td>".$row["price"]."</td>
			</tr>";
		}
		echo "</table>";
	}
	else
		echo "<b>No result</b>";
?>
	<br><a href="admin.php">GO BACK TO HOMEPAGE</a>
</body>
</html>