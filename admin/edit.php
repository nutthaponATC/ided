<?php 
include('config.php'); 
$id_inno = $_GET['id_inno'];

session_start();

if (empty($_SESSION['name_user'])) {
	echo "<script language='javascript'>";
	echo "location='index.php';";
	echo "</script>";
}

?>
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
	<div class="container">
		<div class="col-md-10">
			<h1 style="font-size: 450%; font-style: italic; color: rgba(249, 86, 11, 1);">ข้อมูลนวัตกรรมทางการศึกษา</h1>
			<h3 style="font-style: italic; margin-top:10px; color: rgba(249, 86, 11, 1);">ระบบฐานข้อมูลการบริหารจัดการข้อมูลนวัตกรรมทางการศึกษา</h3>
		</div>
		<div class="col-md-2">
			<img src="../image/button_rss.png" style="margin-top:40px;">
		</div>
	</div>

	<div class="container">
		<div id="custom-bootstrap-menu" class="navbar navbar-default" style="border-style: none; z-index: 900; width:100%+20px;" role="navigation">
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
						<li><a href="main.php">จัดการข้อมูล</a></li>
						<li><a href="add.php">เพิ่มข้อมูล</a></li>
						<li><a href="banner.php">เพิ่มรูปนวัตกรรม</a></li>
						<li><a href="../index.php">กลับหน้าหลัก</a></li>
		            </ul>
		        </div>
		    </div>
		</div>
	</div>

	<div class="container" style="margin-top:-10px;">
		<img src="image/head2.png" style="width:100%;">
	</div>

	<div class="container" style="margin-top:10px;">
		<div class="col-md-12" style="background-color:#ffffff; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5); height:100%; padding-top:50px; padding-bottom:100px;">
			<div class="col-md-10" style="font-size: 120%;">
				<form action="edit_process.php" method="post" enctype="multipart/form-data">
				<?php 
				$sql = "SELECT * FROM innovation WHERE id = $id_inno;";
				mysql_query("SET NAMES utf8");
				$query = mysql_query($sql);
				$data = mysql_fetch_array($query);
				 ?>

				<div class="col-md-5">
					<?php 
					if ($data['image'] == "") {
						echo "<i class='fa fa-picture-o' style='font-size:300px;' aria-hidden='true'></i>";
					} else {
						echo "<img src='file/".$data['image']."' id='image' height='250px' width='100%' class='thumbnail'>";
					}

					 ?>
					<input class="form-control" type="file" id="files" name="image">
					
				</div>
				<div class="col-md-7">
					<input class="form-control" type="hidden" name="id_innovation" value="<?php echo $data['id']; ?>">
					<div class="col-md-3" style="margin-top:10px; padding-top:10px;">
						ชื่อนวัตกรรม
					</div>	
					<div class="col-md-9" style="margin-top:10px; padding-top:10px;">
						<textarea class="form-control" name="innovation" style="width:100%; height:100%;" rows="4" cols="50"><?php echo $data['innovation']; ?></textarea>
					</div>	
					<div class="col-md-3" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						ชื่อผู้จัดทำ
					</div>	
					<div class="col-md-9" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						<input class="form-control" type="text" name="name" value="<?php echo $data['name']; ?>">
					</div>	
					<div class="col-md-3" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						ปีที่จัดทำ
					</div>	
					<div class="col-md-9" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						<input class="form-control" type="text" name="year" value="<?php echo $data['year']; ?>">
					</div>	
					<div class="col-md-3" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						รหัสสืบค้น
					</div>	
					<div class="col-md-9" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						<input class="form-control" type="text" name="idsearch" value="<?php echo $data['idsearch']; ?>">
					</div>	
					<div class="col-md-3" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						ชนิด
					</div>	
					<div class="col-md-9" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						<?php 
						if ($data['type'] == 1) {
							echo "<select class='form-control' name='type'>";
								echo "<option value='1' selected>งานวิจัย</option>";
								echo "<option value='2'>วิทยานิพนธ์</option>";
								echo "<option value='3'>สื่อนวัตกรรม</option>";
								echo "<option value='4'>สื่ออื่นๆ</option>";
							echo "</select>";
						} elseif ($data['type'] == 2) {
							echo "<select class='form-control' name='type'>";
								echo "<option value='1'>งานวิจัย</option>";
								echo "<option value='2' selected>วิทยานิพนธ์</option>";
								echo "<option value='3'>สื่อนวัตกรรม</option>";
								echo "<option value='4'>สื่ออื่นๆ</option>";
							echo "</select>";
						} elseif ($data['type'] == 3) {
							echo "<select class='form-control' name='type'>";
								echo "<option value='1'>งานวิจัย</option>";
								echo "<option value='2'>วิทยานิพนธ์</option>";
								echo "<option value='3' selected>สื่อนวัตกรรม</option>";
								echo "<option value='4'>สื่ออื่นๆ</option>";
							echo "</select>";
						} else {
							echo "<select class='form-control' name='type'>";
								echo "<option value='1'>งานวิจัย</option>";
								echo "<option value='2'>วิทยานิพนธ์</option>";
								echo "<option value='3'>สื่อนวัตกรรม</option>";
								echo "<option value='4' selected>สื่ออื่นๆ</option>";
							echo "</select>";
						}
						 ?>
						
					</div>	
					<div class="col-md-3" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						ไฟล์ pdf
					</div>	
					<div class="col-md-9" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						<?php 
						if ($data['pdf'] == "") {
							echo "-";
						} else {
							echo "<a href='admin/file/".$data['pdf']."' download><i class='fa fa-file-o' aria-hidden='true'></i> ".$data['pdf']."</a>";
						}

						?>
						<input class="form-control" type="file" id="pdf" name="pdf">
						
					</div>	
					<div class="col-md-3" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						การติดต่อขอใช้นวัตกรรม
					</div>	
					<div class="col-md-9" style="margin-top:10px; padding-top:10px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
						<input class="form-control" type="text" name="contack" value="<?php echo $data['contack']; ?>">
					</div>	

				</div>
				<div class="col-md-12" style="margin-top:50px; padding-top:20px; border-top:1px solid rgba(0, 0, 0, 0.3); ">
					<center><h3>บทคัดย่อ</h3></center>
					<textarea class="form-control" name="abstract" style="width:100%; height:100%;" rows="20" cols="50"><?php echo $data['abstract']; ?></textarea>
				</div>
				<div class="col-md-12" style="margin-top:50px; padding-top:20px;">
					<div class="col-md-11">
						<input id="bt" class="btn btn-default" style="margin-top:10px; background-color:black; color:white;" type="submit" name="submit" value="บันทึกการแก้ไข">
						<a href="main.php"><input id="bt" class="btn btn-default" style="margin-top:10px; background-color:black; color:white;" type="button" name="back" value="ย้อนกลับ"></a>
					</div>
					<div class="col-md-1">
						<a href='remove.php?id_inno=<?php echo $data['id']; ?>'><input id="bt" class="btn btn-default" style="margin-top:10px; background-color:black; color:white;" type="button" name="back" value="ลบ"></a>
					</div>
				</div>
				</form>
			</div>

			<?php 
			$j = 1;
			for ($i = 0; $i < 5; $i++) { 
				$sql = "SELECT type FROM innovation WHERE type = $j AND status = 1";
				$query = mysql_query($sql);
				$type[] = mysql_num_rows($query);
				$j++;
			}

			$sql = "SELECT MAX(id) FROM innovation";
			$query = mysql_query($sql);
			$idNew = mysql_fetch_array($query);
			$sql = "SELECT *  FROM `innovation` WHERE id = $idNew[0];";
			mysql_query("SET NAMES utf8");
			$query = mysql_query($sql);
			$dataNew = mysql_fetch_array($query);
			
			 ?>

			<div class="col-md-2" style="height:500px;">
				<div>
					<div style="float:left; width:50px;">
						<img src="../image/bgr_h2.png">
					</div>
					<div style="float:left; width:100px; margin-top:-20px;">
						<h3>หมวดหมู่</h3>						
						<a href="type.php?type=1">
							<p>งานวิจัย (<?php echo $type[0]; ?>)</p>
						</a>
						<a href="type.php?type=2">
							<p>วิทยานิพนธ์ (<?php echo $type[1]; ?>)</p>
						</a>
						<a href="type.php?type=3">
							<p>สื่อนวัตกรรม (<?php echo $type[2]; ?>)</p>
						</a>
						<a href="type.php?type=4">
							<p>สื่ออื่นๆ (<?php echo $type[3]; ?>)</p>
						</a>
						<a href="index.php">
							<p>ทั้งหมด (<?php echo $type[0]+$type[1]+$type[2]+$type[3]; ?>)</p>
						</a>
					</div>
				</div>
				<div>
					<div style="float:left; width:50px;">
						<img src="../image/bgr_h2.png" style="margin-top:20px;">
					</div>
					<div style="float:left; width:100px;">
						<h3>ล่าสุด</h3>
						<a href="detail.php?id_inno=<?php echo $idNew[0]; ?>"><p><?php echo $dataNew['innovation']; ?></p></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="width:1140px; background-color: rgba(249, 86, 11, 1); text-align:center; padding-bottom:20px;">
		<div class="container" style="color:#ffffff;">
			<div class="col-md-3">
				<br>
				Copyright © 2016<br> ข้อมูลนวัตกรรมทางการศึกษา
			</div>
			<div class="col-md-5" style="text-align:center;">
				<br>
				คณะครุศาสตร์อุตสาหกรรม <br>สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง <br>
				แขวงลาดกระบัง เขตลาดกระบัง กรุงเทพฯ 10520				
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-3">
				<br>
				<i class="fa fa-phone" style="font-size:16px;"></i> ติดต่อผู้ดูแลระบบ <br>
				ผศ.ดร.ภาไพกาญจน์ อินทร์น้อย <br>
				โทรศัพท์ 02-3298000 ต่อ 6061 
			</div>
		</div>
	</div>

</body>
</html>

<script language='javascript'>

// datatable
$(document).ready(function() {
	//Filter Postion
	$('#example').DataTable( {
        "sDom": '<"top"f>t<"bottom"p><"clear">'
    } );

	$('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search" />' );
    } );

    //List Filter Year
    var table = $('#example').DataTable();

	table.columns().each( function ( colIdx ) {
	    var select = $('<select class="form-control" style="width:100px;"><option value="">เลือกปี</option></select>')
	        .appendTo(
	            table.column([2]).header()
	        )
	        .on( 'change', function () {
	            table
	                .column([2])
	                .search( $(this).val() )
	                .draw();
	        } );
	    table
	        .column([2])
	        .cache( 'search' )
	        .sort()
	        .unique()
	        .each( function ( d ) {	       
	            select.append( $('<option value="'+d+'">'+d+'</option>') );
	        } );
	} );

} );

	document.getElementById("files").onchange = function () {
	    var reader = new FileReader();
	    reader.onload = function (e) {
	        document.getElementById("image").src = e.target.result;
	    };
	    reader.readAsDataURL(this.files[0]);
	};
</script>