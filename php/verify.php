<?php 
  $id = $_GET['id'];

  include('database/connect.php');

  $sql = "SELECT * FROM travellers WHERE id = '$id' AND validity=1;";

  if (mysqli_query($conn, $sql)->fetch_array(MYSQLI_NUM) > 0) {
    	echo "Pass is VALID";
    	//header("Location: ../pages/main.html?b=1");
	} 
	else {
	    //header("Location: ../pages/main.html?b=0");
      echo "INVALID PASS";
	}
?>
