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
						<li><a href="public.php">หน้าหลัก</a></li>
						<li><a href="contact.php">ค้นหาขั้นสูง</a></li>
		            </ul>
		        </div>
		    </div>
		</div>
	</div>

	<div class="container" style="margin-top:-10px;">
		<img src="image/head2.png" style="width:100%; margin-left:0px;">
	</div>

	<div class="container">
		<table id="example" class="display" style="font-size: 20px;" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>เลขทะเบียน</th>
	                <th>รายละเอียด</th>
	                <th>ผู้ยืม</th>
	                <th align='right'>วันที่ยืม</th>
	                <th align='left'>ปี</th>
	                <th>สถานะ</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php 
	        	$sql = "SELECT * FROM lent_return";
	        	mysql_query("SET NAMES utf8");
	        	$query = mysql_query($sql);

	        	while ($data = mysql_fetch_array($query)) {
	        		if ($data['status'] == 0) {
	        			$statusLent = 'รอการอนุมัติ';
	        		} elseif ($data['status'] == 1) {
	        			$statusLent = 'คืนแล้ว';
	        		} else {
	        			$statusLent = 'ยังไม่ได้คืน';
	        		}

	        		$dateInput = date('j F Y', strtotime($data['date_lent']));
					$explodeDate = explode(" ", $dateInput);

					switch($explodeDate[1]) {
					    case "January": $month = "มกราคม"; break;
					    case "February": $month = "กุมภาพันธ์"; break;
					    case "March": $month = "มีนาคม"; break;
					    case "April": $month = "เมษายน"; break;
					    case "May": $month = "พฤษภาคม"; break;
					    case "June": $month = "มิถุนายน"; break;
					    case "July": $month = "กรกฎาคม"; break;
					    case "August": $month = "สิงหาคม"; break;
					    case "September": $month = "กันยายน"; break;
					    case "October": $month = "ตุลาคม"; break;
					    case "November": $month = "พฤศจิกายน"; break;
					    case "December": $month = "ธันวาคม"; break;
					}

					$date = $explodeDate[0].' '.$month;

	        		echo "
	        		<tr>
		                <td>".$data['id_mda']."</td>
		                <td>".$data['name_mda']."</td>
		                <td>".$data['name_user']."</td>
		                <td align='right'>".$date."</td>
		                <td>".$data['year']."</td>
		                <td><center>".$statusLent."</center></td>
		            </tr>";
	        	}
	        	 ?>
	            
	        </tbody>
	    </table>
	</div>

</body>
</html>

<script language='javascript'>

// datatable
$(document).ready(function() {
	//Filter Postion
	$('#example').DataTable( {
        "sDom": '<"top"f>rt<"bottom"p><"clear">'
    } );

    //List Filter Year
    var table = $('#example').DataTable();

    table.columns().each( function ( colIdx ) {
	    var select = $('<br><select><option value="">เลือกรายละเอียด</option></select>')
	        .appendTo(
	            table.column([1]).header()
	        )
	        .on( 'change', function () {
	            table
	                .column([1])
	                .search( $(this).val() )
	                .draw();
	        } );
	    table
	        .column([1])
	        .cache( 'search' )
	        .sort()
	        .unique()
	        .each( function ( d ) {	       
	            select.append( $('<option value="'+d+'">'+d+'</option>') );
	        } );
	} );

	table.columns().each( function ( colIdx ) {
	    var select = $('<select><option value="">เลือกผู้ยืม</option></select>')
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

	table.columns().each( function ( colIdx ) {
	    var select = $('<br><select><option value="">เลือกเดือน</option><option value="มกราคม">มกราคม</option><option value="กุมภาพันธ์">กุมภาพันธ์</option><option value="มีนาคม">มีนาคม</option><option value="เมษายน">เมษายน</option><option value="พฤษภาคม">พฤษภาคม</option><option value="มิถุนายน">มิถุนายน</option><option value="กรกฎาคม">กรกฎาคม</option><option value="สิงหาคม">สิงหาคม</option><option value="กันยายน">กันยายน</option><option value="ตุลาคม">ตุลาคม</option><option value="พฤศจิกายน">พฤศจิกายน</option><option value="ธันวาคม">ธันวาคม</option></select>')
	        .appendTo(
	            table.column([3]).header()
	        )
	        .on( 'change', function () {
	            table
	                .column([3])
	                .search( $(this).val() )
	                .draw();
	        } );
	} );

	table.columns().each( function ( colIdx ) {
	    var select = $('<select><option value="">เลือกปี</option></select>')
	        .appendTo(
	            table.column([4]).header()
	        )
	        .on( 'change', function () {
	            table
	                .column([4])
	                .search( $(this).val() )
	                .draw();
	        } );
	    table
	        .column([4])
	        .cache( 'search' )
	        .sort()
	        .unique()
	        .each( function ( d ) {	       
	            select.append( $('<option value="'+d+'">'+d+'</option>') );
	        } );
	} );

} );
</script>