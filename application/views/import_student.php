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

	<style>
		.modal {
			/* display: bloc k !important; */
			/* I added this to see the modal, you don't need this */
		}

		/* Important part */

		.modal-dialog {
			overflow-y: initial !important
		}

		.modal-body {
			height: 500px;
			overflow-y: auto;
		}

	</style>
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
								<div class="row clearfix">
									<div class="col-xs-12 col-sm-6">
										<h2> รายชื่อนิสิต </h2>
									</div>
									<div class="col-xs-12 col-sm-6 align-right">
										<button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">นำเข้ารายชื่อนิสิต</button>
									</div>
								</div>
							</div>
							<div class="body">
								<div class="body table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>รหัสนิสิต</th>
												<th>ชื่อ-นามสกุล</th>
												<!-- <th>เกรด</th>
												<th>TA</th>
												<th>การดำเนินการ</th> -->
											</tr>
										</thead>
										<tbody>
											<?php foreach ($students as $x) { ?>
											<tr>
												<td>
													<?php echo $x->Student_id ?>
												</td>
												<td>
													<a href="#" data-toggle="modal" data-target="#student_detail">
														<?php echo $x->Student_firstname." ".$x->Student_lastname ?>
													</a>
												</td>
												<!-- <td>
													<?php echo $x->Student_grade ?>
												</td>
												<td>-</td>
												<td>-</td> -->
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" style="display: none;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">นำเข้ารายชื่อนิสิต</h4>
				</div>
				<div class="modal-body">
					<input type="file" id="file" name="file" class="form-control" placeholder="">
					<p id="msg"></p>
				</div>
				<div class="modal-footer">
					<button type="submit" id="upload" class="btn btn-success waves-effect">UPLOAD</button>
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="student_detail" tabindex="-1" role="dialog" style="display: none;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">หัวข้อ</h4>
				</div>
				<div class="modal-body">
					รายละเอียด
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" style="display: none;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">ยืนยันการนำเข้านำเข้ารายชื่อนิสิต</h4>
				</div>
				<form action="<?php echo base_url() ?>/index.php/ImportStudent/confirmData" method="post">
					<div class="modal-body">
						<table class="table">
							<thead>
								<tr>
									<th>รหัสนิสิต</th>
									<th>ชื่อ-นามสกุล</th>
									<!-- <th>เกรด</th> -->
								</tr>
							</thead>
							<tbody id="confirmData">

							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="submit" id="upload" class="btn btn-success waves-effect">CONFIRM</button>
						<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</form>
			</div>
		</div>
	</div>



	<!-- Jquery Core Js -->
	<script src="<?php echo base_url() ?>/plugins/jquery/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function (e) {

			$('#upload').on('click', function (e) {
				var file_data = $('#file').prop('files')[0];
				var form_data = new FormData();
				form_data.append('file', file_data);

				$.ajax({
					url: '<?php echo base_url() ?>/index.php/ImportStudent/upload_file', // point to server-side controller method
					dataType: 'json', // what to expect back from the server
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
					type: 'post',
					success: function (res) {
						EMPTY_FILE = 0;
						UPLOAD_FAIL = 1;
						UPLOAD_SUCCESS = 2;

						switch (res.status) {
							case EMPTY_FILE:
								alert(res.msg);
								break;

							case UPLOAD_FAIL:
								alert(res.msg);
								$('#file').val('');
								break;

							case UPLOAD_SUCCESS:
								alert(res.msg);
								$('#defaultModal').modal('toggle');

								$('#file').val('');

								var table = "";
								res.data.forEach(x => {
									table += "<tr><td>" + x.ID + "</td><td>" + x.name + "</td></tr>";
								});

								$('#confirmData').html(table);
								$('#confirmModal').modal('show');
								break;
						}
					}
				});
			});
		});

	</script>

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
