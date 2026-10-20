<?php
include_once("connection.php");
error_reporting(0);
$sql="insert into food ( food_item,monthly_storge,yearly_storge,date_of_arrival,id) values('".$_POST['food']."','".$_POST['quantity']."','".$_POST['year']."','".$_POST['date']."','".$_POST['id']."')";
$result=mysqli_query($con, $sql);
	echo"<script>
		alert('Added In The List Suceesfully');
		window.location='food.php';
		</script>";
mysqli_close($con);
?>

	 
		