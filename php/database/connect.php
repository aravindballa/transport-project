<?php
$user = 'root';
$pass = '';
$url = 'localhost';
$db_name = 'transport';

$connect_err = 'Sorry, We\'re experiencing trouble.'; 

mysql_connect($url, $user, $pass) or die($connect_err);
mysql_select_db($db_name) or die($connect_err);

?>
