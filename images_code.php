<?php
include_once("connection.php");
$file="images/".$_POST['fileupload'];
echo"file:".$file;
$sql="insert into images(images) values('".$file."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
alert('Error');
</script>";
else
	echo"<script>
		window.location='dashboard.html';
		alert('Uploaded Sucessfully!');
		</script>";
mysqli_close($con);
?>