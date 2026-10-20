<?php
include_once("connection.php");
//echo $_GET['tmail'];
?>
<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
			body{
			background-color:#20c997;
			
		} 
			.container{
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
echo "<form action='admin_profile_upd_code.php' method='post'>";
$sql="select * from admin where admin_id='".$_GET['tid']."';";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
echo"<br>";
echo"<br>";
echo "<div class='container'>";
echo"<br>";
echo "<CENTER><H5> UPDATE - PROFILE </H5> ";
echo" </center>";
echo"<br>";
echo" <b> Admin Id </b> ";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[admin_id]' name='id' readonly required>";
echo"<br>";
echo"<br>";

echo "<b> Name </b>";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[name]' name='name'   required >";
echo"<br>";
echo"<br>";

echo "<b>Email Id</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[email]' name='email' required >";
echo"<br>";
echo"<br>";

echo "<b>Contact</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[contact]' name='contact' />";
echo"<br>";
echo"<br>";
echo "<b>Password</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[password]'  name='password' />";
echo "<br>";
echo "<br>";
echo "<br>";
echo  "<CENTER>";
echo "<button type='submit' class='btn btn-success' ><h5> Update Confirm</h5></button>";
echo "</center>";


echo "</form>";
echo "</body>";

?>
</html>