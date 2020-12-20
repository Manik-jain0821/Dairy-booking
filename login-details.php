<?php
session_start();//it creates session array for the user logged in now
include_once("mysql-connection.php");
$uid=$_GET["uid"];
$pass=$_GET["pass"];
$query="select * from users where uid='$uid' and password='$pass'";
$record=mysqli_query($database,$query);
$count=mysqli_num_rows($record);
if($count == 0)
echo "0";
else
{
    $_SESSION["activeuser"]=$uid;
    echo "1";
}
        ?>
        
