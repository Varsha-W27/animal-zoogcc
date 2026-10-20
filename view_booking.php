<?php
include_once("connection.php");
$sql="select * from book;";
$result=mysqli_query($con, $sql);
echo"<br>";
ECHO"<CENTER><H4> <FONT  COLOR='green'> VIEW ANIMAL DETAILS</FONT> </H4></CENTER>";
ECHO"<BR>";
echo"<table class='table table-bordered'>";
echo"<tr>";
echo"<th> Name</th>";
echo"<th>Email</th>";
echo"<th> Service</th>";
echo"<th>Date</th>";
echo"<th> Request</th>";
echo"<th>Delete The Details</th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td> $row[id_for_animal] </td>";
	echo"<td> $row[name_of_species] </td>";
	echo"<td> $row[date_of_arrival] </td>";
	echo"<td> $row[gender] </td>";
	echo"<td> <a href='update_animal.php'> Update </a> </td>";
	echo"<td><a href='Delete_animal.php'> Delete</td>";
}
echo"</table>";
mysqli_close($con);
?>