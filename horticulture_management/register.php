<?php
include("connect.php");

if(isset($_POST['register'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$usertype = $_POST['usertype'];

	$sql = "INSERT INTO users(username, password, usertype) values('$user', '$pass', '$usertype')";
	if($conn->query($sql)) {
		echo "Record Inserted Successfully..!!";
		?>
		<script type = "text/javascript"> window.location.href="multiuserlogin.php"</script>
		<?php
	}
	else {
		echo "Error: ".$sql . "<br>". $conn->error;
	}
	$conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM</title>
	<h1><center>REGISTRATION FORM</center></h1>
	<style type="text/css">
		form{
			padding-top: 20px;
			text-align: center;
			font-size: 30px;
		}
		input{
			width: 200px;
			height: 30px;
			font-size: 20;
		}
	</style>
</head>
<body bgcolor="purple">
	<form method="post">
		<div>Username: <input type="text" name="user" required><br><br></div>
		<div>Password: <input type="password" name="pass" required><br><br></div>
		<div>Select User Role: <select name="usertype">
			<option value="user">User</option>
		</select><br><br></div>
		<div><input type="submit" name="register" value="REGISTER"></div>
	</form>
</body>