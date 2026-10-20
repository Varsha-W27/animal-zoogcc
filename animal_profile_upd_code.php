<?php
include_once("connection.php");
$sql="update animal_details set animal_name='".$_POST['name']."',name_of_species='".$_POST['species']."',status='".$_POST['status']."',date_of_arrival='".$_POST['date']."',gender='".$_POST['gender']."',info='".$_POST['info']."' where id_for_animal='".$_POST['id']."';";
$result=mysqli_query($con, $sql);
echo "<script>
alert('Updated successfully');
window.location='view_animal.php'
</script>";
?>