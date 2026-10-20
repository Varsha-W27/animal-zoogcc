<?php
$con=mysqli_connect("localhost","root","","aczm");
if (mysqli_connect_error())
{
	echo"Failed to connect";
}
$sql="insert into register values('".$_POST['user']."','".$_POST['email']."','".$_POST['password']."','".$_POST['c_password']."')";
echo $sql;

if(!mysqli_query($con,$sql))
{
	
	die("Error".mysqli_error($con));
	echo "<script>alert('Signup Unsuccessful!!')</script>";
	//echo "<script>window.location='register.php';</script>";
}
else
{
	
	echo "<script>alert('Signup Successfull!!')</script>";
	echo "<script>window.location='login.php';</script>";
}
?>