<?php
include("connect.php");

//update
if(isset($_POST['update'])) {
	$up_key = $_POST['update_key'];
	$column = $_POST['column'];

	$query = "UPDATE users SET price='%$up_key%' WHERE $column LIKE '%$column%'";
	$result = $conn->query($query);
	if(mysqli_query($conn,$result))
		echo '<script type = "text/javascript">alert("Record updated successfully..!!")</script>';
	else
		echo "No result";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<h1>ADMIN PAGE</h1>
	<h2>UPDATE PRODUCT INFO</h2>
</head>
<body bgcolor="#9999ff">
	<div>
		<form method="post">
			<div>Enter the new price: <input type="text" name="update_key" required><br><br></div>
			<div>Update based on: <select name="column">
				<option value="product_id">ID</option>
				<option value="product_name">Name</option>
			</select><br><br></div>
			<input type="submit" name="update" value="UPDATE">
		</form>
	</div>
</body>
</html>