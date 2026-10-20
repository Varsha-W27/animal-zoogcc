
<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from animal_details";
$result=mysqli_query($con, $sql);
//echo"<table border='1'>";
echo"<br>";
ECHO"<CENTER><H4> <FONT  COLOR='green'> VIEW ANIMAL DETAILS</FONT> </H4></CENTER>";
echo"<table class='table table-bordered' >";
echo"<tr>";
echo "<th><CENTER> IMAGES</CENTER></th>";
echo"<th> <CENTER>ANIMAL DETAIL </CENTER></th>";
echo"<th>INFORMATION <center></th>";

echo"</tr>";
while($row=mysqli_fetch_array($result))
{
	
	echo"<tr>";
	echo"<td><p><img src=$row[images] width='250' height='250'></td>";
	echo" <td><p><b> Name -</b> $row[animal_name]<p><b>Name of Species -</b> $row[name_of_species]<p><b>Status -</b> $row[status]<p><b> Date of Arrival -</b> $row[date_of_arrival]<p><b>Gender -</b> $row[gender]</td>";
	echo"<td><b>Detailed Information - </b>$row[info]</td>";
	echo"<tr>";
}
echo"</table>";
mysqli_close($con);
	?>