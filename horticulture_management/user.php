<?php
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>USER</title>
	<h1>USER PANEL</h1>
</head>
<body bgcolor="orange">
	<div>
		<ul>
			<a href="user_view.php"><input type="submit" value="VIEW PRODUCTS"></a><br><br>
			<a href="user_search.php"><input type="submit" value="SEARCH PRODUCT"></a><br><br>
			<a href="order_product.php"><input type="submit" value="ORDER PRODUCT"></a><br><br>
			<a href="cancel_product.php"><input type="submit" value="CANCEL ORDER"></a><br><br>
			<a href="user_contact.php"><input type="submit" value="CONTACT US"></a><br><br>
		</ul>
	</div>
	<a href="multiuserlogin.php">GO BACK TO LOGIN PAGE</a>
</body>
</html>