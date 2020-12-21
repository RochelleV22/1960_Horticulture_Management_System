<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<h1>ADMIN PANEL</h1>
	<h2>INSERT NEW PRODUCT</h2>
</head>
<body bgcolor="#9999ff">
	<div>
		<form method="post" enctype="multipart/form-data">
			<div>Product ID: <input type="text" name="pid" required><br><br></div>
			<div>Insert Image file: <input type="file" name="image" required><br><br></div>
			<div>Product Name: <input type="text" name="pname" required><br><br></div>
			<div>Price: <input type="text" name="price" required><br><br></div>
			<div><input type="submit" name="insert" value="INSERT"></div>
		</form>
	</div>

	<!-- PHP CODE -->
	<?php
include("connect.php");

//insert
if(isset($_POST['insert'])) {
	$id = $_POST['pid'];
	$file = $_FILES['image']['name'];
	$name = $_POST['pname'];
	$price = $_POST['price'];

	$query = "INSERT INTO products VALUES('$id', '$file', '$name', '$price')";
	$result = mysqli_query($conn, $query);
	if($result){
		move_uploaded_file($_FILES['image']['tmp_name'], "$file");
		echo "Record Inserted Successfully..!!";
		?>
		/<script type = "text/javascript"> window.location.href="admin_display.php"</script>
		<?php
	}
	else
		echo "<br>Error: ".$conn->error;
}
?>
</body>
</html>