<?php 

	include('../database/connect.php');

	$userid = $_POST['userid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$pass_re = $_POST['passwordre'];

	if($password != $pass_re) die("Passwords did not match. Try Again! \n\n Press back!");

	$sql = "INSERT INTO conductors(userid, firstname, lastname, password) VALUES ('$userid', '$firstname', '$lastname','$password');";

	if (mysqli_query($conn, $sql)) {
    echo "Registered successfully";
	} 
	else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

 ?>