<?php
//unset the specific session variable
include_once("connection.php");
error_reporting(0);
unset($_SESSION['emailid']);

//redirect to the index page
header("location:index.html");
exit;
?>