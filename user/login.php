<?php
$username=$_GET['username'];
$_pwd=$_GET['pwd'];

$server="localhost";
$user="root";
$pwd="123456";
$dbname="oj";

$con=new mysqli($server,$user,$pwd,$dbname);

$sql = "SELECT * FROM user WHERE username='".$username."'";
$result=$con->query($sql);
if($result->num_rows>0){
    $row=$result->fetch_assoc();
    if($row["password"]==$_pwd)
    echo 1;
    else echo 0;
}
else echo -1;
?>
