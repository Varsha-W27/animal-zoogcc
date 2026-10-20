<?php
include_once("connection.php");
error_reporting(0);
$sql="delete from user_reg where Email_id='".$_POST['emailid']."'";
$result=mysqli_query($con, $sql);
if(mysqli_error($con, $sql))
	echo"<script>
		alert('Deletion not sucessful');
		</script>";
else
	echo"<script>
		window.location='del_user.html';
		alert('Account Deactivated Sucessfully');
		</script>";

mysqli_close($con);
?>