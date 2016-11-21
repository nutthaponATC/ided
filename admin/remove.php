<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_inno = $_GET['id_inno'];

	$sql = "UPDATE `innovation` SET `status` = 0 WHERE `innovation`.`id` = $id_inno;";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		echo "<script language='javascript'>";
		echo "alert('ลบข้อมูลเรียบร้อย');";
		echo "location='main.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถลบข้อมูลได้ กรุณาลองใหม่อีกครั้ง');";
		echo "location='main.php';";
		echo "</script>";
	}
?>