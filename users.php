<?php
include_once("mysql-connection.php");
$email=$_GET["mail1"];
$uid=$_GET["name1"];
$pass=$_GET["myInput"];

$query="insert into users values('$email','$uid','$pass')";
mysqli_query($database,$query);
?>