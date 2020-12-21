<?php 
include("connect.php");

// 1. Find the session
session_start();

// 2. Unset all the session variables
unset($_SESSION['product_id']);
// unset( $_SESSION['USERID'] );
unset( $_SESSION['product_name'] );
unset( $_SESSION['price'] );
unset( $_SESSION['username'] ); 
unset($_SESSION['password']);
unset($_SESSION['usertype']);

// 4. Destroy the session
// session_destroy();
redirect("multiuserlogin.php?logout=1");
?> 	 