<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from  user_reg";
$result=mysqli_query($con, $sql);
echo"<br>";
echo"<h4> <b><CENTER> <font color='green'>LIST OF USERS </font> </B></center> </H4>";
echo"<br>";
echo"<table class='table table-bordered'>";
//echo"<table border='1'>";
echo"<tr>";

echo"<th> Full Name </th>";
echo"<th> email </th>";
echo"<th> Phone number </th>";
echo"<th> password </th>";
echo"<th> Confirm-password </th>";
echo"<th> Address </th>";
echo"<th> City </th>";
echo"<th> States </th>";
echo"<th> Country </th>";
echo"<th> Pincode </th>";
echo"<th> Edit </th>";
echo"<th> Delete </th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td> $row[full_name] </td>";
	echo"<td> $row[Email_id] </td>";
	echo"<td> $row[contact] </td>";
	echo"<td> $row[password] </td>";
	echo"<td> $row[confirm_password] </td>";
	echo"<td> $row[address] </td>";
	echo"<td> $row[city] </td>";
	echo"<td> $row[state] </td>";
	echo"<td> $row[country] </td>";
	echo"<td> $row[pincode] </td>";
	echo"<td><a href='user_profile_upd.php?tmail=$row[Email_id]'> <button type='button' class='btn btn-success'>Edit</button> </td>";
	echo"<td> <a href='user_profile_del.php?tmail=$row[Email_id]'><button type='button' class='btn btn-danger'>Delete</button> </td>";
}
echo"</table>";
mysqli_close($con);
?>