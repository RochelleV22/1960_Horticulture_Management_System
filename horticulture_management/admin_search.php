<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<h1>ADMIN PANEL</h1>
	<h2>SEARCH PRODUCT</h2>
</head>
<body bgcolor="#9999ff">
	<div>
		<form method="post">
			<div>Enter the search key: <input type="text" name="search_key" required><br><br></div>
			<div>Search based on: <select name="column">
				<option value="product_id">ID</option>
				<option value="product_name">Name</option>
			</select><br><br></div>
			<input type="submit" name="search" value="SEARCH">
		</form>
	</div>

	<!--PHP CODE -->
	<?php
	include("connect.php");

	//search
	if(isset($_POST['search'])) {
		$key = $_POST['search_key'];
		$column = $_POST['column'];

		$query = "SELECT * FROM products WHERE $column LIKE '%$key%'";
		$result = $conn->query($query);
		if($result->num_rows>0){
			echo "<br><b>MATCH FOUND..!!";
			echo "<table>
				<tr>
				<th>Product ID</th>
				<th>Image</th>
				<th>Name</th>
				<th>Price(per kg)</th>
				</tr>";
			while ($row=$result->fetch_assoc()) {
				echo "<br><tr>
				<td>".$row['product_id']."</td>
				<td><img src='".$row["image"]."' style='width:80px; height:80px;'</td>
				<td>".$row['product_name']."</td>
				<td>".$row['price']."</td>
				</tr>";
			}
			echo "</table>";
		}
		else
			echo "<br><b>MATCH NOT FOUND..!!</b></br>";
	}
	?>
	<br><a href="admin.php">GO BACK TO HOMEPAGE</a>
</body>
</html>