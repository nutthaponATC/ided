<?php 
echo "<meta charset='utf-8'>";
include('config.php');

if ($_FILES["image"]["tmp_name"] != "") {

	function generateRandomString($length = 20) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	$realname = generateRandomString().".png";

	$sql = "INSERT INTO `banner` (`banner`) VALUES ('$realname');";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		if(($_FILES["image"]["tmp_name"]) != "") {
			copy($_FILES["image"]["tmp_name"],"../image/".$realname);
		}

		echo "<script language='javascript'>";
		echo "alert('เพิ่มข้อมูลเรียบร้อย');";
		echo "location='banner.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถเพิ่มข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='banner.php';";
		echo "</script>";
	}
} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='banner.php';";
	echo "</script>";
}
 ?>