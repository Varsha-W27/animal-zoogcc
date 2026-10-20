<?php
include_once("connection.php");
error_reporting(0);
$sql="select * from admin where email= '".$_POST['txtmail']."' and password='".$_POST['txtpass']."'";
$results=mysqli_query($con, $sql);
if($row=mysqli_fetch_array($results))
{
	echo"<script> window.location='dashboard.html'; </script>";
}
else
{
	echo"<script  >
		
	alert('Incorrect Email_Id or Password !');
	window.location='admin.html';
	</script>";
}
mysqli_close($con);
?>