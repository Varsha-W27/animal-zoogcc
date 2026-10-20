
<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from booking;";
$results=mysqli_query($con, $sql);
echo"<br>";
echo"<h4> <b><CENTER> <font color='green'>BOOKING DETAILS</font> </B></center> </H4>";
echo"<br>";
echo"<table class='table table-bordered'>";
echo"<tr>";
echo"<th> Booking Id</th>";
echo"<th>First Name </th>";
echo"<th>Last Name </th>";
echo"<th>Age</th>";
echo"<th> Gender</th>";
echo"<th> contact </th>";
echo"<th> Email </th>";
echo"<th> Address </th>";
echo"<th> City</th>";
echo"<th> State</th>";
echo"<th> Country</th>";
echo"<th> Pincode</th>";
echo"<th>Date of Booking</th>";
echo"<th> Child </th>";
echo"<th> Adult </th>";
echo"<th> Camera </th>";
echo"<th> Vehicle </th>";
echo"<th> Individual</th>";
echo"<th> Total</th>";
echo"</tr>";

while($row=mysqli_fetch_array($results))
{
	echo"<tr>";
	echo"<td> $row[bid] </td>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[last_name] </td>";
	echo"<td> $row[age] </td>";
	echo"<td> $row[gender] </td>";
	echo"<td> $row[contact]</td>";
	echo"<td> $row[email] </td>";
	echo"<td> $row[ad1] </td>";
	echo"<td> $row[city] </td>";
	echo"<td> $row[state] </td>";
	echo"<td> $row[country] </td>";
	echo"<td> $row[pincode] </td>";
	echo"<td> $row[date] </td>";
	echo"<td> $row[child] </td>";
	echo"<td> $row[adult] </td>";
	echo"<td> $row[camera] </td>";
	echo"<td> $row[vehicle] </td>";
	echo"<td> $row[individual] </td>";
	echo"<td> <b>$row[total]<b> </td>";
	echo"</tr>";
}
echo"</table>";
mysqli_close($con);
echo"</div>";
echo"</body>";
echo"</form>";
?>

	
