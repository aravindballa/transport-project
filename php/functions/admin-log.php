<?php 

	include('../database/connect.php');

	$admin = $_POST['admin'];
	$password = $_POST['password'];
	

	$sql = "SELECT * FROM user WHERE admin = '$admin' AND password = '$password';";

	if (mysqli_query($conn, $sql)->fetch_array(MYSQLI_NUM) > 0) {
    	header("Location: travellers-view.php");
	} 
	else {
	    echo "Invalid Credentials";
	}

	mysqli_close($conn);

 ?>