<?php
include_once("connection.php");
//echo $_GET['tmail'];
?>
<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
			
			
			container{
			border:1px #bf925b;
			top:0;
			height:600px;
			width:500px;
			background-color:white;
}
  .thin-line-input{
			border:none;
			border-bottom:1px solid #ccc;
			padding:5px;
			width:400;
		}
</style>
</head>	

<?php
echo "<body>";
echo "<form action='animal_food_upd_code.php' method='post'>";
$sql="select * from food where  id='".$_GET['tid']."';";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
echo"<br>";
echo"<br>";
echo "<div class='container'>";
echo"<br>";
echo "<H5> UPDATE - Food Item List </H5> ";
echo"<br>";
echo" <b> ID </b> ";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[id]' name='id' readonly required>";
echo"<br>";
echo"<br>";

echo "<b> Name </b>";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[food_item]' name='name'  required >";
echo"<br>";
echo"<br>";
echo "<b>Monthly Quantity</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[monthly_storge]' name='quantity' required >";
echo"<br>";
echo"<br>";
echo "<b>Yearly Quantity</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[yearly_storge]' name='year' />";
echo"<br>";
echo"<br>";
echo "<b>Date</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[date_of_arrival]'  name='date' />";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<button type='submit' class='btn btn-success'>Update Confirm</button>";
echo "</form>";
echo "</body>";

?>
</html>