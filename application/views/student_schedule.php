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

<body class = "theme-amber">
    <!-- Page Loader -->
    <div class="wrapper">
        <?php require_once 'header.php'?>
        <?php require_once 'sidebar_student.php'?>
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
                                ช่วงเวลาที่ปฏิบัติการได้
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <form action="" method="post">
                            <!-- <div class="row clearfix"> -->
                            <table class="table table-bordered display dataTable with-check">
                                <thead>
                                    <tr>
                                        <th><center>วัน-เวลา</th>
                                        <th><center>8.00-9.50</th>
                                        <th><center>10.00-11.50</th>
                                        <th><center>12.00-13.50</th>
                                        <th><center>14.00-15.50</th>
                                        <th><center>16.00-17.50</th>
                                        <th><center>18.00-19.50</th>
                                        <th><center>20.00-21.50</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>จันทร์</th>
                                        <td bgcolor="#40E0D0"></td>
                                        <td bgcolor="#FFFF66"></td>
                                        <td></td>
                                        <td bgcolor="#FF0000"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>อังคาร</th>
                                        <td bgcolor="#FFFF66"></td>
                                        <td></td>
                                        <td></td>
                                        <td bgcolor="#40E0D0"></td>
                                        <td bgcolor="#FFFF66"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>พุธ</th>
                                        <td bgcolor="#FF0000"></td>
                                        <td bgcolor="#FF0000"></td>
                                        <td></td>
                                        <td bgcolor="#FFFF66"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>พฤหัสบดี</th>
                                        <td bgcolor="#FF0000"></td>
                                        <td></td>
                                        <td></td>
                                        <td bgcolor="#FF0000"></td>
                                        <td bgcolor="#FF0000"></td>
                                        <td bgcolor="#40E0D0"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>ศุกร์</th>
                                        <td ></td>
                                        <td></td>
                                        <td></td>
                                        <td bgcolor="#FF0000"></td>
                                        <td bgcolor="#40E0D0"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>เสาร์</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>อาทิตย์</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                                <center><button type="submit" class="btn btn-success m-t-15 waves-effect">ยืนยัน</button>
                                <button type="reset" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button></center>
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
    <script src="<?php echo base_url() ?>/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>/js/demo.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

</body>

</html>