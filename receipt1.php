<?php
include_once("mysql-connection.php");
$uid=$_GET["name1"];
$milk = $_GET["q1"];
$cheese = $_GET["q2"];
$mattha = $_GET["q3"];
$curd = $_GET["q4"];
$ghee = $_GET["q5"];


$query="insert into receipt values('$uid','$milk','$cheese','$mattha','$curd','$ghee')";
mysqli_query($database,$query);
?>