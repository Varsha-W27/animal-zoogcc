<?php
include_once("connection.php");
$sql="insert into booking(name,last_name,age,gender,contact,email,ad1,ad2,city,state,country,pincode,date,adult,child,camera,individual,total,vehicle) values('".$_POST['fn']."','".$_POST['ln']."','".$_POST['age']."','".$_POST['gender']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['ad1']."','".$_POST['ad2']."','".$_POST['city']."','".$_POST['state']."','".$_POST['country']."','".$_POST['pincode']."','".$_POST['datePicker']."','".$_POST['adult_ticket']."','".$_POST['child_ticket']."','".$_POST['camera']."','".$_POST['individual_ticket']."','".$_POST['tot_amt']."','".$_POST['vehicle']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
		alert('Booking Failed..');
		
		</script>";
else
	echo"<script>
		alert('Booking Done Successfully..');
		window.location='print_ticket1.php';
		</script>";
mysqli_close($con);
?>
