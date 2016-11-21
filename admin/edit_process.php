<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_innovation = $_POST['id_innovation'];
$type = $_POST['type'];
$idsearch = $_POST['idsearch'];
$year = $_POST['year'];
$name = $_POST['name'];
$innovation = $_POST['innovation'];
$contack = $_POST['contack'];
$abstract = $_POST['abstract'];

if (isset($idsearch) && $idsearch != "" && isset($innovation) && $innovation != "") {
	function generateRandomString($length = 20) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	if(($_FILES["image"]["tmp_name"]) != "" && ($_FILES["pdf"]["tmp_name"]) != "") {
		$realname = generateRandomString().".png";
		$realnamepdf = generateRandomString().".pdf";
		copy($_FILES["image"]["tmp_name"],"file/".$realname);
		copy($_FILES["pdf"]["tmp_name"],"file/".$realnamepdf);

		$sql = "UPDATE `innovation` SET `type` = '$type', `idsearch` = '$idsearch', `year` = '$year', `name` = '$name', `innovation` = '$innovation', `image` = '$realname', `contack` = '$contack', `abstract` = '$abstract', `pdf` = '$realnamepdf' WHERE `innovation`.`id` = $id_innovation;";

	} elseif(($_FILES["pdf"]["tmp_name"]) != "") {
		$realnamepdf = generateRandomString().".pdf";
		copy($_FILES["pdf"]["tmp_name"],"file/".$realnamepdf);

		$sql = "UPDATE `innovation` SET `type` = '$type', `idsearch` = '$idsearch', `year` = '$year', `name` = '$name', `innovation` = '$innovation', `contack` = '$contack', `abstract` = '$abstract', `pdf` = '$realnamepdf' WHERE `innovation`.`id` = $id_innovation;";

	} elseif(($_FILES["image"]["tmp_name"]) != "") {
		$realname = generateRandomString().".png";
		copy($_FILES["image"]["tmp_name"],"file/".$realname);

		$sql = "UPDATE `innovation` SET `type` = '$type', `idsearch` = '$idsearch', `year` = '$year', `name` = '$name', `innovation` = '$innovation', `image` = '$realname', `contack` = '$contack', `abstract` = '$abstract' WHERE `innovation`.`id` = $id_innovation;";

	} else {
		$sql = "UPDATE `innovation` SET `type` = '$type', `idsearch` = '$idsearch', `year` = '$year', `name` = '$name', `innovation` = '$innovation', `contack` = '$contack', `abstract` = '$abstract' WHERE `innovation`.`id` = $id_innovation;";
	} ;
	
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		echo "<script language='javascript'>";
		echo "alert('แก้ไขข้อมูลเรียบร้อย');";
		echo "location='main.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถแก้ไขข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='main.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='main.php';";
	echo "</script>";
}
 ?>