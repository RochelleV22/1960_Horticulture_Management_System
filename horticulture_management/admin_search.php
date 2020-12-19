<?php
include("connect.php");

//search
if(isset($_POST['search'])) {
	$key = $_POST['search_key'];
	$column = $_POST['column'];

	$query = "SELECT * FROM products WHERE $column LIKE '%$key%'";
	$result = $conn->query($query);
	if($result->num_rows>0){
		while ($row=$result->fetch_assoc()) {
			//echo $row['product_id']. "  " . $row['product_name']. "  " . $row['price'];
			//echo "<br>";
			echo "<br><b>Match Found..!!";
			echo "<br><tr>
			<td>".$row['product_id']."</td>
			<td>".$row['product_name']."</td>
			<td>".$row['price']."</td>
			</tr>";
		}
	}
	else
		echo "No result";
}
?>

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
	<br><a href="admin.php">GO BACK TO HOMEPAGE</a>
</body>
</html>