<?php
include_once("connection.php");
$sql="update user_reg set full_name='".$_POST['fullname']."',Email_id='".$_POST['emailid']."',contact='".$_POST['contact']."',password='".$_POST['password']."',confirm_password='".$_POST['cpassword']."',address='".$_POST['address']."',city='".$_POST['city']."',state='".$_POST['state']."',country='".$_POST['country']."',pincode='".$_POST['pincode']."'where Email_id='".$_POST['emailid']."';";
$result=mysqli_query($con, $sql);
echo "<script>
alert('Updated successfully');
window.location='disp_user.php'
</script>";
?>