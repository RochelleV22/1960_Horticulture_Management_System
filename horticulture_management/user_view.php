<?php
include("connect.php");
	$query = "SELECT * FROM products";
	echo "<b><h1>USER PANEL</h1></b>";
	echo "<b><h2>LIST OF ITEMS</h2></b>";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			echo "<b><table>
			<tr> 
			<td>".$row["product_id"]."</td>
			<td>".$row["product_name"]."</td>
			<td>".$row["price"]."</td>
			</tr>
			</table></b>";
		}
	}
	else
		echo "<b>No result</b>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>USER</title>
</head>
<body bgcolor="orange">
	<br><a href="order_product.php"><input type="submit" value="PLACE ORDER"></a><br><br>
	<a href="user.php">GO BACK TO HOMEPAGE</a><br><br>
</body>
</html>