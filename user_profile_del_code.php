<?php
include_once("connection.php");
$sql="delete from user_reg where Email_id='".$_POST['emailid']."';";
$result=mysqli_query($con, $sql);

echo "<script>
alert('Deactivated successfully');
window.location='disp_user.php'
	</script>";
?>