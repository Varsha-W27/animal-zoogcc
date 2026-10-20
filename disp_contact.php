<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from  contact";
$result=mysqli_query($con, $sql);
//echo"<table border='1'>";
echo"<br>";
echo"<center> <B><H4><FONT COLOR='GREEN'> VIEW CONTACT LIST </FONT> </H4></B></CENTER>";
echo"<br>";
echo"<table class='table table-bordered' width=800px;>";
echo"<tr>";
echo"<th> Full Name </th>";
echo"<th> Email Id </th>";
echo"<th> Contact </th>";
echo"<th> Message </th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email] </td>";
	echo"<td> $row[contact] </td>";
	echo"<td> $row[message] </td>";
	echo"</tr>";
}
echo"</table>";
mysqli_close($con);
?>