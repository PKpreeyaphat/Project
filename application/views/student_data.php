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

<body class="theme-amber">
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
                            <h2>ข้อมูลนิสิต</h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>เกรด</th>
                                        <th>TA</th>
                                        <th>การดำเนินการ</th>
                                    </tr>
                                </thead>
                                <!-- <tbody>
                                    <?php foreach($subject as $i){ ?>
                                  <tr>
                                        <th scope="row">1</th>
                                        <td><a href="<?php echo base_url();?>index.php/page2/section/<?php echo $i->Subject_id?>"><?php echo $i->Subject_id?></a></td>
                                        <td><?php echo $i->Subject_name?></td>
                                        <td><button type="button" class="btn btn-success m-t-15 waves-effect">ตกลง</button>
                                        <button type="button" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button></td>
                                    </tr>

                                    <?php } ?>
                                </tbody> -->
                            </table>
                            <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">MODAL - DEFAULT SIZE</button>
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
                    <h4 class="modal-title" id="defaultModalLabel">กิจจา จา...</h4>
                </div>
                <div class="modal-body">
                    ผมชื่อ....
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
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