<?php 
$host = "localhost"; 
$user = "root"; 
$pass = "";
$DBName = "ided_innovation";

// $host = "localhost"; 
// $user = "maxtaxitha_root"; 
// $pass = "nuttha12345678";
// $DBName = "maxtaxitha_inno";
$con = mysql_connect($host, $user, $pass) or die("ติดต่อฐานข้อมูลไม่ได้");
mysql_select_db($DBName, $con) or die("เลือกฐานข้อมูลไม่ได้");

 ?>