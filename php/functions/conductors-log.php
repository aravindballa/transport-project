<?php 

	include('../database/connect.php');

	$userid = $_POST['userid'];
	$password = $_POST['password'];
	

	$sql = "SELECT * FROM conductors WHERE userid = '$userid' AND password = '$password';";

	if (mysqli_query($conn, $sql)->fetch_array(MYSQLI_NUM) > 0) {
    	header("Location: ../../pages/main.html");
	} 
	else {
	    echo "Invalid Credentials";
	}

	mysqli_close($conn);

 ?>