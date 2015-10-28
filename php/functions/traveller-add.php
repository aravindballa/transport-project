<?php 

	include('../database/connect.php');

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$validity = $_POST['validity'];

	$sql = "INSERT INTO travellers(name, gender, age, address, validity) VALUES ('$name', '$gender', $age,'$address', $validity);";

	if (mysqli_query($conn, $sql)) {
    echo "Registered successfully! \n";

    $result = mysqli_query($conn, "SELECT id FROM travellers WHERE name = '$name';");

    $row = mysqli_fetch_array( $result );

    $id = $row['id'];

    echo '<p><a href="http://api.qrserver.com/v1/create-qr-code/?data='. $id . '&size=100x100">' . 'Get QR Code' . '</a></p>';

	} 
	else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

 ?>