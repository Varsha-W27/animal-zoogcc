<?php
include_once("connection.php");
error_reporting(0);
$sql="insert into user_reg(full_name,Email_id,contact,password,confirm_password,address,city,state,country)values('".$_POST['fullname']."','".$_POST['emailid']."','".$_POST['contact']."','".$_POST['password']."','".$_POST['cpassword']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['country']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
			alert('Registration Failed..');
			window.location='user_reg.html';
			</script>";
else
	echo"<script>
		alert('Successful registration');
		window.location='user_dashboard.html';
		</script>";
mysqli_close($con);
?>





