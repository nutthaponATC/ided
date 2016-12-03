<?php 
include('config.php'); 
$typeSearch = $_GET['type'];

if ($typeSearch == 1) {
	$typeSearchType = "งานวิจัย";
} elseif ($typeSearch == 2) {
	$typeSearchType = "วิทยานิพนธ์";
} elseif ($typeSearch == 3) {
	$typeSearchType = "สื่อนวัตกรรม";
} else {
	$typeSearchType = "สื่ออื่นๆ";
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
			<div class="col-md-12">
				<table id="example" class="display" style="font-size: 15px; padding-top:30px;" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th width="170" style="padding-bottom:45px;"><center>ลักษณะของนวัตกรรม</center></th>
			                <th width="80" style="padding-bottom:45px;"><center>รหัสสืบค้น</center></th>
			                <th width="70"><center>ปีที่ทำ</center></th>
			                <th style="padding-bottom:45px;"><center>ชื่อเรื่องของนวัตกรรม/งานวิจัย</center></th>
			                <th width="170" style="padding-bottom:45px;"><center>ชื่อผู้จัดทำ</center></th>
			                <th width="50"><center>แก้ไข</center></th>
			                <th width="50"><center>ลบ</center></th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php 
			        	if ($typeSearch == 1) {
			        		$sql = "SELECT * FROM innovation WHERE type = 1 AND status = 1";
			        	} elseif ($typeSearch == 2) {
			        		$sql = "SELECT * FROM innovation WHERE type = 2 AND status = 1";
			        	} elseif ($typeSearch == 3) {
			        		$sql = "SELECT * FROM innovation WHERE type = 3 AND status = 1";
			        	} else {
			        		$sql = "SELECT * FROM innovation WHERE type = 4 AND status = 1";
			        	}

			        	mysql_query("SET NAMES utf8");
			        	$query = mysql_query($sql);

			        	while ($data = mysql_fetch_array($query)) {
			        		if ($data['type'] == 1) {
			        			$typeInnovation = "งานวิจัย";
			        		} elseif ($data['type'] == 2) {
			        			$typeInnovation = "วิทยานิพนธ์";
			        		} elseif ($data['type'] == 3) {
			        			$typeInnovation = "สื่อนวัตกรรม";
			        		} else {
			        			$typeInnovation = "สื่ออื่นๆ";
			        		}

			        		echo "
			        		<tr style='cursor:pointer;' data-href='detail.php?id_inno=".$data['id']."'>
				                <td>".$typeInnovation."</td>
				                <td>".$data['idsearch']."</td>
				                <td><center>".$data['year']."</center></td>
				                <td>".$data['innovation']."</td>
				                <td>".$data['name']."</td>
				                <td><center><a href='edit.php?id_inno=".$data['id']."'><i class='fa fa-cog' style='color:rgba(249, 86, 11, 1); font-size:30px;' aria-hidden='true'></i></a></center></td>
				                <td><center><a href='remove.php?id_inno=".$data['id']."'><i class='fa fa-times' style='color:rgba(249, 86, 11, 1); font-size:30px;' aria-hidden='true'></a></i></center></td>
				            </tr>";
			        	}
			        	 ?>
			            
			        </tbody>
			    </table>
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
			$query = mysql_query($sql);
			$dataNew = mysql_fetch_array($query);
			
			 ?>
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

jQuery(document).ready(function($) {
    $('#example').on( 'click', 'tbody tr', function () {
        window.document.location = $(this).data("href");
    });
});
</script>