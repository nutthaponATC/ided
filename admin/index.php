<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Athiti:400" rel="stylesheet">
</head>
<body>
	<div class="container container-table">
	    <div class="row vertical-center-row">
	        <div class="text-center col-md-4 col-md-offset-4" style="background-color:#b3b3cc; padding-top:40px; padding-bottom:40px; border-radius: 25px;">
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