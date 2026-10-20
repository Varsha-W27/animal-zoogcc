<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from sponsers_and_adoption";
$result= mysqli_query($con, $sql);
echo"<br>";
echo"<h4> <b><CENTER> <font color='green'>LIST OF SPONSERS </font> </B></center> </H4>";
echo"<br>";
echo"<table class='table table-bordered'>";
//echo"<table border='1'>";
echo"<tr>";
echo"<th> Name </th>";
echo"<th> Email </th>";
echo"<th> Contact </th>";
echo"<th> Food</th>";
echo"<th> Quantity of food </th>";
echo"<th> Mode of Payment </th>";
echo"<th> Selected card </th>";
echo"<th> Amount</th>";
echo"<th> Expiray date</th>";
echo"<th> Pin of Card </th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email] </td>";
	echo"<td> $row[contact] </td>";
	echo"<td> $row[food] </td>";
	echo"<td> $row[qunatity_of_food] </td>";
	echo"<td> $row[mode_of_payment] </td>";
	echo"<td> $row[selected_card] </td>";
	echo"<td> $row[amount] </td>";
	echo"<td> $row[expiray_date] </td>";
	echo"<td> $row[pin_of_card] </td>";
	
}
echo"</table>";
mysqli_close($con);
?>