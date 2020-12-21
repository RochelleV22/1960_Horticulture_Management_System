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
			<div>Product Name: <input type="text" name="pname" required><br><br></div>
			<div>New Price: <input type="text" name="price" required><br><br></div>
			<input type="submit" name="update" value="UPDATE">
		</form>
	</div>
	<?php
	include("connect.php");

	//update
	if(isset($_POST['update'])) {
		$pname = $_POST['pname'];
		$price = $_POST['price'];

		$query = "UPDATE products SET price = $price WHERE pname = $pname";
		$result = mysqli_query($conn, $query);
		if($result){
			?>
			<script type = "text/javascript"> window.location.href="admin_display.php"</script>
			<?php
		}
		else
			echo "NO RESULT";
	}
	?>
	<br><a href="admin.php">GO BACK TO HOMEPAGE</a>
</body>
</html>