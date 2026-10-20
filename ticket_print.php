<?php
include_once("connection.php");


error_reporting(0);
$sql="select * from booking ORDER BY bid DESC";      
$result=mysqli_query($con, $sql);

echo"<center>";
echo"<br>";
echo"<br>";echo"<br>";
echo" <B> Welcome To Zoogenix</b>";
$row = mysqli_fetch_array($result);
echo"<br>";
echo " Booking Id : ".$row['bid']."<br>";
echo " Name : ".$row['name']."<br>";
echo " Last Name  :".$row['last_name']."<br>"; 
echo " Age  : ".$row['age']."<br>";
echo " Contact :".$row['contact']."<br>"; 
echo " Email : ".$row['email']."<br>";
echo " Date :".$row['date']."<br>"; 
echo " adult : ".$row['adult']."<br>";
echo " child  :".$row['child']."<br>"; 
echo " Vehicle  :".$row['vehicle']." <br>"; 
echo " camera  :".$row['camera']." <br>"; 
echo " Total  :".$row['total']." <br>"; 
echo"<br>";
echo "<input type='button' value='print' style='width:100px  ;'  onclick='window.print()'/> ";
echo "<label for 'print' onclick='window.print()'/> ";
echo"<br>";
echo"<br>";
echo"******Thank You Visiting Again*****";
echo"</center>";
mysqli_close($con);
?>