<?php
include_once("connection.php");
$sql="delete from admin where admin_id='".$_POST['id']."';";
$result=mysqli_query($con, $sql);

echo "<script>
alert('Deactivated successfully');
window.location='view_admin.php'
	</script>";
?>