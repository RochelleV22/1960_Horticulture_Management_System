<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<h1>ADMIN PANEL</h1>
	<h2>DELETE PRODUCT</h2>
</head>
<body bgcolor="#9999ff">
	<form method="post">
		<div>Which product do you want to delete? <input type="text" name="delete_key"><br><br></div>
		<div>Delete based on: <select name="column">
			<option value="product_id">ID</option>
			<option value="product_name">Name</option></select><br><br></div>
		<input type="submit" name="delete" value="DELETE">
	</form>

	<!-- PHP CODE -->
	<?php
	include("connect.php");

	//delete
	if(isset($_POST['delete'])) {
		$key = $_POST['delete_key'];
		$column = $_POST['column'];

		$query = "DELETE FROM products WHERE $column LIKE '%$key%'";
		$result = mysqli_query($conn, $query);
		if($result) {
			echo "Record Deleted Successfully..!!";
			?>
				<script type = "text/javascript"> window.location.href="admin_display.php"</script>
				<?php
		}
		else
			echo "No result";
	}
	?>
	<br><a href="admin.php">GO BACK TO HOMEPAGE</a>
</body>
</html>