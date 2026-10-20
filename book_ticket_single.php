<?php
include_once("connection.php");
$sql="insert into single_entry (name,date,gender,camera,video,vehicle) values('".$_POST['name']."','".$_POST['date']."','".$_POST['gender']."','".$_POST['camera']."','".$_POST['video']."','".$_POST['vehicle']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
		window.location='book_ticket_single.html';
		alert('Booking Failed');
		</script>";
else
	echo"<script>
			window.location='book_ticket_single.html';
		alert('Booking Done');
		</script>";
mysqli_close($con);
?>