<?php
include_once("connection.php");
error_reporting(0);
$sql="insert into sponsers_and_adoption(name,email,contact,food,qunatity_of_food,mode_of_payment,selected_card,amount,expiray_date,pin_of_card)values('".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['food']."','".$_POST['qunatity']."','".$_POST['mode']."','".$_POST['card']."','".$_POST['amount']."','".$_POST['date']."','".$_POST['pin']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
		alert('Not submitted');
		</script>";
else
	echo"<script>

		alert('Thank You For Your Donation');
		window.location='sponsors.php';
		</script>";
mysqli_close($con);
?>
