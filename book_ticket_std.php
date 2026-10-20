<?php
include_once("connection.php");
$sql="insert into student_ticket(institute_name,student,teacher,date,camera,video,vehicle) values('".$_POST['institute']."','".$_POST['student']."','".$_POST['teacher']."','".$_POST['date']."','".$_POST['camera']."','".$_POST['video']."','".$_POST['vehicle']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
	window.location=('book_ticket_std.html');
		alert('Booking Failed');
		</script>";
else
	echo"<script>
		window.location=('book_ticket_std.html');
		alert('Booked');
		</script>";
mysqli_close($con);
?>