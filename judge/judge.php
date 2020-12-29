<?php   
header("Content-type: text/html; charset=utf-8");
$code=$_GET['code'];

$code_file=fopen("./code.cpp","w");
fwrite($code_file,$code);

$output=system("python judge.py",$res);
echo($output."TT".$res);
?>