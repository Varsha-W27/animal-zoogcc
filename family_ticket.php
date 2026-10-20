<?php
include_once("connection.php");
$sql="insert into family_ticket(first_name,last_name,contact,email,child,adult,camera,video,vehicle) values('".$_POST['first']."','".$_POST['last']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['child']."','".$_POST['adult']."','".$_POST['camera']."','".$_POST['video']."','".$_POST['vehicle']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
		window.location='book_ticket_fam.html';
		alert('Booking Request Failed');
		</script>";
else
	echo"<script>
		window.location='book_ticket_fam.html';
		alert('Booking Done');
		</script>";
mysqli_close($con);
?>