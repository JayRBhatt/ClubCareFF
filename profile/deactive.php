<?php
session_start();

include '../dbconnect.php';

$username = $_SESSION["username"];

if (isset($_POST['deactivate'])) {
		
	$sql="UPDATE studentinfo SET is_active = 'D' where username='$username'";
	$rslt = mysqli_query($db, $sql);
 
	session_destroy();
	unset($_SESSION['username']);
	
	$message = urlencode("Your account is deactivated.");
	header("Location: ../login.php?status=".$message);
	die;

}