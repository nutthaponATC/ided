<?php 
session_start();
include('config.php');

echo "<meta charset='utf-8'>";

$user = $_POST['user'];
$pass = $_POST['pass'];

if (isset($user) && $user != "" && isset($pass) && $pass != "") {
	$sql = "SELECT * FROM user WHERE username = '$user' and password = '$pass'";
	$query = mysql_query($sql);
	$countCheck = mysql_num_rows($query);
	$fetchData = mysql_fetch_array($query);
	$user_id = $fetchData['user_id'];
	$name = $fetchData['name'];

	if ($countCheck == 1) {
		$_SESSION['user_id'] = $user_id;
		$_SESSION['name_user'] = $name;

		echo "<script language='javascript'>";
		echo "location='main.php';";
		echo "</script>";

	} else {
		echo "<script language='javascript'>";
		echo "alert('ชื้อผู้ใช้หรือรหัสผ่านผิด กรุณาลองใหม่อีกครั้ง');";
		echo "location='index.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนชื่อผู้ใช้และรหัสผ่าน');";
	echo "location='index.php';";
	echo "</script>";
	
}
 ?>