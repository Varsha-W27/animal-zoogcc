 <?php
echo"<center>";
echo"<br>";
echo"<img src=\animal-zoogcc\img\img9.jpg width='300'/> ";
echo"<br>";
echo"<br>";
echo"<h3><font color='green'> Food Storage Details</font> </h3>";
echo"</center>";
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from food";
$result=mysqli_query($con, $sql);
//echo"<table class='table table-bordered'>";
echo"<center>";
echo"<br>";
echo"<br>";
echo"<table class='table table-bordered'>";
echo"<tr>";
echo"<th> Id </th>";
echo"<th> Food Item </th>";
echo"<th> Monthly Storage </th>";
echo"<th> Yearly Storage </th>";
echo"<th> Date </th>";
echo"<th> Edit </th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td> $row[id] </td>";
	echo"<td> $row[food_item] </td>";
	echo"<td> $row[monthly_storge] </td>";
	echo"<td> $row[yearly_storge] </td>";
	echo"<td> $row[date_of_arrival]</td>";
	echo"<td> <a href='food_data_upd.php?tid=$row[id]'> <button type='button' class='btn btn-success'style='width:100px;'>Edit</button>";
	
	echo"</tr>";
}
echo"</table>";
mysqli_close($con);
?>
