<?php
include_once("connection.php");
error_reporting(0);
$sql="insert into admin (admin_id,name,email,contact,password) values('".$_POST['id']."','".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['password']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"Insertion Failed";
else
	echo"<script>
alert('Addedd One More Memeber Sucessfully');
</script>";
mysqli_close($con);
?>
<html>
<head>
<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>
</head>
<style>
alert{
	background-color:#FFC107;
	color:#FFFFFF;
	border-radius:10px;
	border:1px solid #FFC107;
	box-shadow:0px 0px 10px rgba(0,0,0,0,2);
}
</style>
</html>