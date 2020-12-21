<!DOCTYPE html>
<html>
<head>
	
	<title>ADMIN</title>
	<h1>ADMIN PAGE</h1>
	<h2>UPDATE PRODUCT INFO</h2>
</head>
<body bgcolor="#9999ff">
	<div>
		<form method="post" enctype="multipart/form-data">
			<div>Product ID: <input type="text" name="pid" required><br><br></div>
			<div>Insert Image file: <input type="file" name="image" required><br><br></div>
			<div>Product Name: <input type="text" name="pname" required><br><br></div>
			<div>Price: <input type="text" name="price" required><br><br></div>
			<div><input type="submit" name="update" value="UPDATE"></div>
		</form>
	</div>
	<?php
	include("connect.php");

	//update
	if(isset($_POST['update'])) {
		$id = $_POST['pid'];
		$file = $_FILES['image']['name'];
		$pname = $_POST['pname'];
		$price = $_POST['price'];

		$query = "UPDATE products SET image='$file', product_name='$pname', price='$price' WHERE product_id='$id'";
		$result = mysqli_query($conn, $query);
		if($result){
			move_uploaded_file($_FILES['image']['tmp_name'], "$file");
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