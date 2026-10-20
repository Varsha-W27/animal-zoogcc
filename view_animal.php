<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";

$sql="select * from  animal_details";
$result=mysqli_query($con, $sql);
//echo"<table border='1'>";
echo"<br>";
ECHO"<CENTER><H4> <FONT  COLOR='green'> VIEW ANIMAL DETAILS</FONT> </H4></CENTER>";
ECHO"<BR>";
echo"<table class='table table-bordered'>";
echo"<tr>";
echo"<th> ID of Animal </th>";
echo"<th> Name Of Animal </th>";
echo"<th> Name of Species </th>";
echo"<th> Status </th>";
echo"<th> Date of Arrival </th>";
echo"<th> Gender</th>";
echo "<th> images</th>";
echo"<th> Information</th>";
echo"<th> Delete </th>";
echo"<th> Edit </th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td> $row[id_for_animal] </td>";
	echo"<td> $row[animal_name]</td>";
	echo"<td> $row[name_of_species] </td>";
	echo"<td> $row[status] </td>";
	echo"<td> $row[date_of_arrival] </td>";
	echo"<td> $row[gender] </td>";
	echo"<td><img src=$row[images] width='150' height='100'></td>";
	echo"<td>$row[info]</td>";
	echo"<td> <a href='del_animal_code.php?tid=$row[id_for_animal]'> <button type='button' class='btn btn-danger'style='width:100px;'>Delete</button>";
    echo"<td> <a href='animal_profile_upd.php?tid=$row[id_for_animal]'> <button type='button' class='btn btn-success'style='width:100px;'>Edit</button>";
  echo"</tr>";
}
echo"</table>";
mysqli_close($con);
?>