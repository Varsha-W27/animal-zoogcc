<?php
include_once("connection.php");
//$file="images/".$_POST['fileupload'];

$sql="insert into animal_details(animal_name,name_of_species,id_for_animal,status,date_of_arrival,gender,images,info) values('".$_POST['animal_name']."','".$_POST['name']."','".$_POST['id']."','".$_POST['Status']."','".$_POST['date']."','".$_POST['gender']."','".$_POST['fileupload']."','".$_POST['info']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
		alert('Not Submitted');
		</script>";
else
	echo"<script>
		window.location='insert_animal_detail.php';
		alert('Submitted Successfully.');
		</script>";
mysqli_close($con);
?>