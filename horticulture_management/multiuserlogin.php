<?php
include("connect.php");

if(isset($_POST['login'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$usertype = $_POST['usertype'];

	$query = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."' AND usertype='".$usertype."'";
	$result = mysqli_query($conn, $query);
	if($result) {
		while ($row = mysqli_fetch_array($result)) {
			echo '<script type = "text/javascript">alert("Logged in successfully as ' .$row['usertype'].'")</script>';
		}
		
		//Incorrect Username or Password
		if (mysqli_num_rows($result)==0){
			?>
			<script type = "text/javascript"> window.location.href="multiuserlogin.php"</script>
			<?php
		}

		//admin login
		else if ($user == 'admin' && $pass == 'admin') {
			?>
			<script type = "text/javascript"> window.location.href="admin.php"</script>
			<?php
		}
		
		//user login
		else{
			?>
			<script type = "text/javascript"> window.location.href="user.php"</script>
			<?php
		}
	}
	else
		echo "No result";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<h1>LOGIN FORM</h1>
	<style type="text/css">
		form{
			padding-top: 20px;
			text-align: left;
			font-size: 20px;
		}
		input{
			width: 200px;
			height: 20px;
			font-size: 15px;
		}
	</style>
</head>
<body bgcolor ="#458b00">
	<form method="post">
		<div>Username: <input type="text" name="user" placeholder="enter username" required><br><br></div>
		<div>Password: <input type="text" name="pass" placeholder="enter password" required><br><br></div>
		<div>Select User Role: <select name="usertype">
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select><br><br></div>
		<div>Not a registered user?<a href="register.php">CLICK HERE</a><br><br></div>
		<div><input type="submit" name="login" value="LOGIN"></div>
	</form>
</body>
</html>