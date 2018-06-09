<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>ระบบจัดการนิสิตผู้ช่วยสอน</title>

	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url() ?>/favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?php echo base_url() ?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?php echo base_url() ?>/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?php echo base_url() ?>/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?php echo base_url() ?>/css/style.css" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?php echo base_url() ?>/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-maroon">
	<!-- Page Loader -->
	<div class="wrapper">
		<?php require_once 'header.php'?>
		<?php require_once 'sidebar_admin.php'?>
	</div>
	<!-- #END# Page Loader -->
	<div class="content-wrapper">
		<section class="content">
			<div class="container-fluid">
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2>
									รายละเอียดรายวิชา
								</h2>
							</div>
							<div class="body">
								<form action="" method="post">
									<div class="row clearfix">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group">
												<div class="form-line">
													<select class="form-control show-tick" name="Subject_id">
														<?php foreach ($subject as $x) { ?>
														<option value="<?php echo $x->Subject_id ?>"><?php echo $x->Subject_id." : ". $x->Subject_name ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="" name="Section_name" class="form-control" placeholder="ชื่อรอง">
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="" name="Section_id" class="form-control" placeholder="กลุ่ม">
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
											<div class="form-group">
												<div class="form-line">
													<select class="form-control show-tick" name="Section_day">
														<option value="MO">วันจันทร์</option>
														<option value="TU">วันอังคาร</option>
														<option value="WED">วันพุธ</option>
														<option value="THU">วันพฤหัสบดี</option>
														<option value="FRI">วันศุกร์</option>
														<option value="SAT">วันเสาร์</option>
														<option value="SUN">วันอาทิตย์</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
											<div class="form-group">
												<div class="form-line">
													<select class="form-control show-tick" name="Section_time">
														<option value="1">8.00-9.50</option>
														<option value="2">10.00-11.50</option>
														<option value="3">12.00-13.50</option>
														<option value="4">14.00-15.50</option>
														<option value="5">16.00-17.50</option>
														<option value="6">18.00-19.50</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
										<select class="form-control show-tick" name="Room_id">
											<option value="1">ห้อง</option>
										</select>
										</div>
									</diV>
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="" name="" class="form-control" placeholder="อ.ผู้สอน/ผู้ประสานงาน">
										</div>
									</div>
									<button type="submit" class="btn btn-success m-t-15 waves-effect">ตกลง</button>
									<button type="reset" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Jquery Core Js -->
	<script src="<?php echo base_url() ?>/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?php echo base_url() ?>/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Select Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/node-waves/waves.js"></script>

	<!-- Custom Js -->
	<script src="<?php echo base_url() ?>/js/admin.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url() ?>/js/demo.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

	<!-- (Optional) Latest compiled and minified JavaScript translation files -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

</body>

</html>
