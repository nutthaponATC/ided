<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$type = $_POST['type'];
$idsearch = $_POST['idsearch'];
$year = $_POST['year'];
$name = $_POST['name'];
$innovation = $_POST['innovation'];
$contack = $_POST['contack'];
$abstract = $_POST['abstract'];

// echo $type." ".$idsearch." ".$year." ".$name." ".$innovation." ".$contack." ".$abstract;
// exit();

if (isset($idsearch) && $idsearch != "" && isset($year) && $year != "" && isset($name) && $name != "" && isset($innovation) && $innovation != "") {

	function generateRandomString($length = 20) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	if(($_FILES["image"]["tmp_name"]) != "") {
		$realname = generateRandomString().".png";
	} else {
		$realname = NULL;
	} ;
	if(($_FILES["pdf"]["tmp_name"]) != "") {
		$realnamepdf = generateRandomString().".pdf";
	} else {
		$realnamepdf = NULL;
	} ;

	$date = date("Y/m/d");

	$sql = "INSERT INTO `innovation` (`id`, `type`, `idsearch`, `year`, `name`, `innovation`, `image`, `contack`, `abstract`, `pdf`, `date`) VALUES (NULL, '$type', '$idsearch', '$year', '$name', '$innovation', '$realname', '$contack', '$abstract', '$realnamepdf', '$date');";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		if(($_FILES["image"]["tmp_name"]) != "") {
			copy($_FILES["image"]["tmp_name"],"file/".$realname);
		}
		if(($_FILES["pdf"]["tmp_name"]) != "") {
			copy($_FILES["pdf"]["tmp_name"],"file/".$realnamepdf);
		}

		echo "<script language='javascript'>";
		echo "alert('เพิ่มข้อมูลเรียบร้อย');";
		echo "location='edit.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถเพิ่มข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='add.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='add.php';";
	echo "</script>";
}
 ?>