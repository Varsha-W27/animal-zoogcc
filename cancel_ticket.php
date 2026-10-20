<?php
include_once("connection.php");
$sql="delete from booking ORDER By bid DESC;";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
		alert('Error cancelling ticket');
		</script>";
else
	echo"<script>
		alert('Ticket Cancellation is Sucessful');
		window.location='print_ticket1.php';
		</script>";
mysqli_close($con);
?>
