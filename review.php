<?php
include_once("connection.php");

error_reporting(0);
$sql="insert into review(message) values('".$_POST['review']."')";
if(mysqli_error($con,$sql))
	echo"Insertion Failed";
else
	echo"Thank You for your valuable Review..";
mysqli_close($con);
?>
