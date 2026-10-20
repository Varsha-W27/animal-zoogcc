<?php
include_once("connection.php");
error_reporting(0);
$sql="insert into contact(name,email,contact,message)values('".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['message']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo" Failed to Sent Message";
else
	echo"<script>
		window.location='contact.php';
		alert('We Will Contact You Soon..');
		</script>";
mysqli_close($con);
?>
