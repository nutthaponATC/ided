<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="shortcut icon" href="icon.png"> -->

	<!-- font -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> -->

	<link rel="stylesheet" href="../style.css">
	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<!-- fa -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
	<title>ข้อมูลนวัตกรรมทางการศึกษา</title>

	<!-- datatable -->
	<script src="datatable/jquery-1.12.0.min.js"></script>      
	<script type="text/javascript" src="datatable/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="datatable/jquery.dataTables.min.css" />  
</head>
<body>
	<div class="container container-table">
	    <div class="row vertical-center-row">
	    	<center><h1 style="font-size: 450%; font-style: italic; color: rgba(249, 86, 11, 1);">ข้อมูลนวัตกรรมทางการศึกษา</h1>
			<h3 style="font-style: italic; margin-top:10px; color: rgba(249, 86, 11, 1);">ระบบฐานข้อมูลการบริหารจัดการข้อมูลนวัตกรรมทางการศึกษา</h3></center>
	        <div class="text-center col-md-4 col-md-offset-4" style="background-color: rgba(249, 86, 11, 1); color:#ffffff; padding-top:40px; padding-bottom:40px; border-radius: 25px;">
	        	<form action="login.php" method="POST" name="form1">
					<table>
						<tr>
							<td width="100px;">
								<h4>ชื่อผู้ใช้</h4>
							</td>
							<td>
								<input id="textbox" class="form-control" type="text" name="user">
							</td>
						</tr>
						<tr>
							<td>
								<h4>รหัสผ่าน</h4>
							</td>
							<td>
								<input id="textbox" class="form-control" type="password" name="pass">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input id="bt" class="btn btn-default" style="margin-top:10px;" type="submit" name="login" value="เข้าสู่ระบบ">&nbsp
								<a href="../index.php">
									<input id="bt2" class="btn btn-default" style="margin-top:10px;" type="button" name="exit" value="กลับสู่หน้าหลัก">
								</a>
							</td>
						</tr>
					</table>
				</form>
	        </div>
	    </div>
	</div>

</body>
</html>