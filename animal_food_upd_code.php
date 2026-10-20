<?php
include_once("connection.php");
$sql="update food set food_item='".$_POST['name']."',monthly_storge='".$_POST['quantity']."',yearly_storge='".$_POST['year']."',date_of_arrival='".$_POST['date']."' where id='".$_POST['id']."';";
$result=mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
	alert('Not Added');
	</script>";
else
	echo"<script>
	alert('Added Suceesfully');
	window.location='food.php';
	</script>";
mysqli_close($con);
?>