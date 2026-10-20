<?php
include_once("connection.php");
//echo $_GET['tmail'];
?>
<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
			/* body{
			background-image:url('/Home-fix-it/img/image4.jpg');
			background-size:100% 100%;
		} */
			container{
			position:absolute;
		    left:400px;
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
echo "<form action='animal_profile_upd_code.php' method='post'>";
$sql="select * from animal_details where  id_for_animal='".$_GET['tid']."';";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
echo"<br>";
echo"<br>";
echo "<div class='container'>";
echo"<br>";
echo "<CENTER><H5> UPDATE - PROFILE </H5> ";
echo" </center>";
echo"<br>";
echo" <b> ID </b> ";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[id_for_animal]' name='id' readonly required>";
echo"<br>";
echo"<br>";
echo "<b>  Animal Name </b>";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[animal_name]' name='name'  required >";
echo"<br>";

echo "<b> Species </b>";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[name_of_species]' name='species'  required >";
echo"<br>";
echo"<br>";
echo "<b>Status</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[status]' name='status' required >";
echo"<br>";
echo"<br>";
echo "<b>Date Of Arrival</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[date_of_arrival]' name='date' />";
echo"<br>";
echo"<br>";
echo "<b>Gender</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[gender]'  name='gender' />";
echo "<br>";
echo"<br>";
echo "<b>Information</b>";
echo "<br>";
echo "<Textarea class='thin-line-input' value='$row[info]'  name='info' /></textarea>";
echo "<br>";
echo "<br>";
echo "<br>";
echo  "<CENTER>";
echo "<button type='submit' class='btn btn-success'>Update Confirm</button>";
echo "</center>";
echo "</form>";
echo "</body>";

?>
</html>