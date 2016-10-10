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

if (isset($number1) && $number1 != "" && isset($type) && $type != "" && isset($year) && $year != "") {
	if(($_FILES["image"]["tmp_name"]) != "") {
		$realname = $_FILES["image"]["name"];
	} else {
		$realname = NULL;
	} ;
	if(($_FILES["pdf"]["tmp_name"]) != "") {
		$realname = $_FILES["pdf"]["name"];
	} else {
		$realname = NULL;
	} ;
	$sql = "INSERT INTO `mda`.`data_mda` (`id`, `id_mda`, `id_type`, `year`, `detail`, `brand`, `amount`, `price`, `total_price`, `applications`, `note`, `date_in`, `company`, `address`, `tel`, `fax`, `web`, `picture`, `status`) VALUES (NULL,'$number','$type','$year','$detail','$brand','$count','$price','$summary','$where','$note','$date','$ncompany','$address','$tel','$fax','$web','$realname', '1');";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		if(($_FILES["image"]["tmp_name"]) != "") {
			copy($_FILES["image"]["tmp_name"],"image/".$_FILES["image"]["name"]);
		}
		if(($_FILES["image"]["tmp_name"]) != "") {
			copy($_FILES["image"]["tmp_name"],"image/".$_FILES["image"]["name"]);
		}

		echo "<script language='javascript'>";
		echo "alert('เพิ่มข้อมูลเรียบร้อย');";
		echo "location='search_mda.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถเพิ่มข้อมูลวัสดุครุภัณฑ์ได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='add_mda.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='add_mda.php';";
	echo "</script>";
	
}
 ?>