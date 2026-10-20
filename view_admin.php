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
			border:1px #bf925b;
			top:0;
			height:100%;
			width:700px;
			background-color:white;
}
  .thin-line-input{
			border:none;
			border-bottom:1px solid #ccc;
			padding:5px;
			width:400;
		}
		heading{
			background-color:red;
		}
</style>
</head>	




<?php
echo"<body>";
echo"<div class='container'>";
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from admin;";
$results=mysqli_query($con, $sql);
echo"<br>";echo"<br>";
echo"<table class='table table-bordered' width='680'height='100'>";
echo"<tr>";
echo"<th> Admin Id </th>";
echo"<th> Name </th>";
echo"<th> Email </th>";
echo"<th> contact </th>";
echo"<th> Password </th>";
echo"<th> Add Member </th>";
echo"<th> Edit </th>";
echo"<th> Delete </th>";
echo"</tr>";

while($row=mysqli_fetch_array($results))
{
	echo"<tr>";
	echo"<td> $row[admin_id] </td>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email]</td>";
	echo"<td> $row[contact] </td>";
	echo"<td> $row[password] </td>";
	echo"<td> <a href='add_member.php'> <button type='button' class='btn btn-warning'style='width:100px;'>Add</button>";
echo"<td> <a href='admin_profile_upd.php?tid=$row[admin_id]'> <button type='button' class='btn btn-success'style='width:100px;'>Edit</button>";
echo"<td> <a href='admin_profile_del.php?tid=$row[admin_id]'> <button type='button' class='btn btn-danger'style='width:100px;'>Delete</button>";
	echo"</tr>";
}
echo"</table>";
mysqli_close($con);
echo"</div>";
echo"</body>";
echo"</form>";
?>
</html>
	
