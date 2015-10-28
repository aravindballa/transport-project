<?php 

	include('../database/connect.php');

	$id = $_GET['id'];


	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$validity = $_POST['validity'];

	$sql = "UPDATE travellers SET name = '$name', gender = '$gender', age = $age, address = '$address', validity = $validity WHERE id = $id;";

	if (mysqli_query($conn, $sql)) {
    echo "Saved successfully! \n";
	}

	else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

 ?>