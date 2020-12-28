<?php
$username=$_GET['username'];
$_pwd=$_GET['pwd'];

$server="localhost";
$user="root";
$pwd="123456";
$dbname="oj";

$con=new mysqli($server,$user,$pwd,$dbname);
$sql="INSERT INTO user (username, password) VALUES ('".$username."','".$_pwd."')";
if($con->query($sql)==true)
echo 1;
else echo 0;
?>