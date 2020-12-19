<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<h1>ADMIN PANEL</h1>
</head>
<body bgcolor="#9999ff">
	<div>
		<!-- MENU SECTION STARTS HERE -->
				<ul>
					<a href="admin_insert.php"><input type="submit" value="INSERT PRODUCT"></a><br><br>
					<a href="admin_delete.php"><input type="submit" value="DELETE PRODUCT"></a><br><br>
					<a href="admin_search.php"><input type="submit" value="SEARCH PRODUCT"></a><br><br>
					<a href="admin_update.php"><input type="submit" value="UPDATE PRODUCT INFO"></a><br><br>
					<a href="admin_display.php"><input type="submit" value="DISPLAY PRODUCTS"></a><br><br>
					<a href="admin_display_users.php"><input type="submit" value="DISPLAY USERS"></a><br><br>
				</ul>
		<!-- MENU SECTION ENDS HERE -->
	</div>
</body>
</html>