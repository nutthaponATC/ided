<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="shortcut icon" href="icon.png"> -->

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Athiti:400" rel="stylesheet">

	<link rel="stylesheet" href="style.css">
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
	<div class="container">
		<h1>ข้อมูลนวัตกรรมทางการศึกษา</h1>
		<h3>ระบบฐานข้อมูลการบริหารจัดการข้อมูลนวัตกรรมทางการศึกษา</h3>
	</div>

	<div class="container">
		<div id="custom-bootstrap-menu" class="navbar navbar-default" style="border-style: none; z-index: 900; margin-left:-5px; width:100%+20px;" role="navigation">
		    <div class="container-fluid">
		        <div class="navbar-header">
		        	<a class="navbar-brand visible-xs" href="#">เมนู</a>
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
		            	<span class="sr-only">Toggle navigation</span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            </button>
		        </div>
		        <div class="collapse navbar-collapse navbar-menubuilder">
		            <ul class="nav navbar-nav navbar-left" id="menu-main">
						<li><a href="../index.php">กลับหน้าหลัก</a></li>
						<li><a href="add.php">เพิ่มข้อมูล</a></li>
						<li><a href="edit.php">จัดการข้อมูล</a></li>
		            </ul>
		        </div>
		    </div>
		</div>
	</div>

	<form action="add_process.php" method="POST" name="form1">
	<div class="container"> 
		<div class="col-md-9">
			<h3>เพิ่มข้อมูล</h3>

			<center><h4>ชนิด *</p></h4></center>
			<select class="form-control" name="type">
				<option value="1" selected>งานวิจัย</option>
				<option value="2">วิทยานิพนธ์</option>
				<option value="3">สื่อนวัตกรรม</option>
				<option value="4">สื่ออื่นๆ</option>
			</select>

			<center><h4>รหัสสืบค้น *</h4></center>
			<input class="form-control" type="text" name="idsearch">

			<center><h4>ปีที่จัดทำ *</h4></center>
			<input class="form-control" type="text" name="year">

			<center><h4>ชื่อผู้จัดทำ *</h4></center>
			<input class="form-control" type="text" name="name">

			<center><h4>ชื่อนวัตกรรม *</h4></center>
			<input class="form-control" type="text" name="innovation">

			<center><h4>ภาพนวัตกรรม</h4></center>
			<center>
				<img id="image" style="margin-left:20px;" height="150" width="130"/>
			</center>
			<br>
			<input class="form-control" type="file" id="files" name="image">

			<center><h4>การติดต่อขอใช้นวัตกรรม</h4></center>
			<input class="form-control" type="text" name="contack">

			<center><h4>บทคัดย่อ</h4></center>
			<textarea class="form-control" name="abstract" style="width:100%; height:100%;" rows="4" cols="50"></textarea>	

			<center><h4>ไฟล์แนบPDF</h4></center>
			<input class="form-control" type="file" id="pdf" name="pdf">

			<input id="bt" class="btn btn-default" style="margin-top:10px; background-color:black; color:white;" type="submit" name="submit" value="เพิ่มข้อมูล">
		</div>

		<div class="col-md-3">

		</div>
	</div>
	</form>

	<div class="container" style=" margin-bottom:0px; margin-top:30px;">
		<h1>ข้อมูลนวัตกรรมทางการศึกษา</h1>
		<h3>ระบบฐานข้อมูลการบริหารจัดการข้อมูลนวัตกรรมทางการศึกษา</h3>
	</div>

</body>
</html>

<script language='javascript'>
	document.getElementById("files").onchange = function () {
	    var reader = new FileReader();
	    reader.onload = function (e) {
	        document.getElementById("image").src = e.target.result;
	    };
	    reader.readAsDataURL(this.files[0]);
	};

	function startCalc(){ 
		interval = setInterval("calc()"); 
	} 
	function calc(){ 
		var count = document.form1.count.value;
		var price = document.form1.price.value;
		document.form1.summaryB.value = count * price;
	}
	function stopCalc(){ 
		clearInterval(interval); 
	} 
</script>