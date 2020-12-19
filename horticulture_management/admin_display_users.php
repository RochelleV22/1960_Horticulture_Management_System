<?php
include("connect.php");
	$query = "SELECT * FROM users";
	echo "<b><h1>ADMIN PANEL</h1></b>";
	echo "<b><h2>REGISTERED USERS</h2></b>";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		echo "<table>
			<tr> 
			<th>Username</th>
			<th>Password</th>
			<th>Usertype</th>
			</tr>";
		while ($row = mysqli_fetch_assoc($result)){
			echo "<tr> 
			<td>".$row["username"]."</td>
			<td>".$row["password"]."</td>
			<td>".$row["usertype"]."</td>
			</tr>";
		}
		echo "</table></b>";
	}
	else
		echo "<b>No result</b>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body bgcolor="#9999ff">
	<br><a href="admin.php">GO BACK TO HOMEPAGE</a>
</body>
</html>