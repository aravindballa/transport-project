<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta charset="utf-8">
    <title>Travellers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/main.css" />
</head>
<body>

	<div class="nav"></div>

	<h4 style="text-align:center;">Registered Travellers</h4>

<?php
/* 
	VIEW.PHP
	Displays all data from 'players' table
*/

	// connect to the database
	include('../database/connect.php');

	// get results from database
	$sql = "SELECT * FROM travellers;";

	$result = mysqli_query($conn, $sql);
		
	// display data in table
	echo "<br><br>";
	
	echo "<table border='1' cellpadding='10px' class='entry-table'>";
	echo "<tr> <th>Name</th> <th>Gender</th> <th>Age</th> <th>Address</th> <th>Validity</th> <th></th> <th></th><th></th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysqli_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['gender'] . '</td>';
		echo '<td>' . $row['age'] . '</td>';
		echo '<td>' . $row['address'] . '</td>';
		echo '<td>' . $row['validity'] . '</td>';
		echo '<td><a href="http://api.qrserver.com/v1/create-qr-code/?data=' . $row['id'] . '&size=100x100' . '">Get QR Code</a></td>';
		echo '<td><a href="../../traveller-edit.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

		echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
?>

<p class="butt-new"><a href="../../traveller-new.html">Add a new contact</a></p>

</body>
</html>	