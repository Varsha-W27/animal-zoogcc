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
			.container{
			position:absolute;
		    left:400px;
			border:1px #bf925b;
			top:220;
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
		.navbar {
            width: 100%;
            background-color: #8BC34A;
            color: #fff;
            padding:0px;
            text-align: center;
        }
		
</style>
</head>
<body>
	<div class="navbar">
        <h1> <img src=\animal-zoogcc\img\icon\icon-10.png > &nbsp; Zoogenix -<small> Zoo & Safari Park </small></h1>
		<br>
		<img src=\animal-zoogcc\img\food1.jpg width="200"/> 
		</div>
<center>
<CENTER><H4><font color="green"> DELETE - ANIMAL </font></H4> 
 </center>
<br>
<br>
<?php
echo "<body>";
echo "<form action='del_animal.php' method='post'>";
$sql="select * from animal_details where id_for_animal='".$_GET['tid']."';";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
echo"<br>";
echo"<br>";
echo "<div class='container'>";
echo"<br>";

echo "<b> ANIMAL ID </b>";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[id_for_animal]' name='animalid'  readonly required >";
echo"<br>";
echo" <b>  ANIMAL NAME </b> ";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[animal_name]' name='animalname' required>";
echo"<br>";
echo"<br>";
echo "<b>NAME OF SPECIES</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[name_of_species]' name='species' required >";
echo"<br>";
echo"<br>";
echo "<b>DATE OF ARRIVAL</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[date_of_arrival]' name='dateofarrival' />";
echo"<br>";
echo"<br>";
echo "<b>GENDER</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[gender]'  name='gender' />";
echo "<br>";
echo "<br>";
echo "<b>STATUS</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[status]' name='status' />";
echo"<br>";
echo"<br>";
echo  "<CENTER>";
echo "<button type='submit' class='btn btn-danger'><h5>Delete Confirm</h5></button>";
echo "</center>";
echo "</form>";
echo "</body>";

?>
</body>
</html>