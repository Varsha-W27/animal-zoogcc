<?php
include_once("connection.php");
error_reporting(0);
$sql="insert into user_update(full_name,Email_id,contact,password,confirm_password,date,address,city,state,country)values('".$_POST['fullname']."','".$_POST['emailid']."','".$_POST['contact']."','".$_POST['password']."','".$_POST['cpassword']."','".$_POST['address']."','".$_POST['date']."','".$_POST['city']."','".$_POST['state']."','".$_POST['country']."')";
$res=mysqli_query($con, $sql);
if(res)
{
	echo"<center>";
	echo"<br>";
	echo"<h3> <font color='green'> Updation Request Processed.. </font>
	<br> <font color='red'> Your Account Will be updated within Two days..</h3> </font>";
}
else
{
	?>
		"<script>
		alert('failed to update');
		</script>";
		<?php
}