<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_banner = $_GET['id_banner'];

	$sql = "DELETE FROM banner WHERE id_banner = $id_banner";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		echo "<script language='javascript'>";
		echo "alert('ลบข้อมูลเรียบร้อย');";
		echo "location='banner.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถลบข้อมูลได้ กรุณาลองใหม่อีกครั้ง');";
		echo "location='banner.php';";
		echo "</script>";
	}
?>