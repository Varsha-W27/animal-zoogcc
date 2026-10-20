
<?php
include_once("connection.php");
error_reporting(0);
$sql="delete from animal_details where id_for_animal='".$_POST['animalid']."'";
$result=mysqli_query($con, $sql);
if(mysqli_error($con, $sql))
	echo"<script>
		alert('Deletion not sucessful');
		</script>";
else
	echo"<script>
		window.location='view_animal.php';
		alert('Animal Deleted  Sucessfully');
		</script>";

mysqli_close($con);
?>