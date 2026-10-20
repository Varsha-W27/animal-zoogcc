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
echo "<form action='user_profile_upd_code.php' method='post'>";
$sql="select * from user_reg where Email_id='".$_GET['tmail']."';";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
echo"<br>";
echo"<br>";
echo "<div class='container'>";
echo"<br>";
echo "<CENTER><H5> UPDATE - PROFILE </H5> ";
echo" </center>";
echo"<br>";
echo" <b> NAME </b> ";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[full_name]' name='fullname' required>";
echo"<br>";
echo"<br>";

echo "<b> EMAIL ID </b>";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[Email_id]' name='emailid'  readonly required >";
echo"<br>";
echo"<br>";
echo "<b>CONTACT</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[contact]' name='contact' required >";
echo"<br>";
echo"<br>";
echo "<b>PASSWORD</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[password]' name='password' />";
echo"<br>";
echo"<br>";
echo "<b>CONFIRM PASSWORD</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[confirm_password]'  name='address' />";
echo "<br>";
echo "<br>";
echo "<b>ADDRESS</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[address]' name='address' />";
echo"<br>";
echo"<br>";
echo "<b>CITY</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[city]' name='city' />";
echo"<br>";
echo"<br>";
echo "<b>STATE</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[state]' name='state' />";
echo"<br>";
echo"<br>";
echo "<b>COUNTRY</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[country]' name='country' />";
echo"<br>";
echo"<br>";
echo "<b>PINCODE</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[pincode]' name='pincode' />";
echo"<br>";
echo"<br>";
echo "<br>";
echo  "<CENTER>";
echo "<button type='submit' class='btn btn-success'>Update Confirm</button>";
echo "</center>";


echo "</form>";
echo "</body>";

?>
</html>