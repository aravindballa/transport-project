<?php
error_reporting(0);

$user = 'root';
$pass = '';
$url = 'localhost';
$db_name = 'transport';

// Create connection
$conn = mysqli_connect($url, $user, $pass, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
