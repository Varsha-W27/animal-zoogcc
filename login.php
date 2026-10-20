<?php
include_once("connection.php");
error_reporting(0);
$sql="select * from user_reg where Email_id= '".$_POST['txtmail']."' and password='".$_POST['txtpass']."'";
$results=mysqli_query($con, $sql);
if($row=mysqli_fetch_array($results))
{
	echo" <script>window.location='user_dashboard.html';</script>";
}
else
{
	echo"<br>";
	echo"<br>";
	echo"<script> window.location='login.html';
	alert('Incorrect Email_Id or Password !');
	</script>";
}
mysqli_close($con);
?>
	