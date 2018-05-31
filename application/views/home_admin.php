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
                                <h2>รับสมัคร TA</h2>
                        </div> 
                        <div class="body">
                            <form action="" method="">
                                <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick">
                                                        <option value="">รายวิชา</option>
                                                        <!-- <option value="MO">MO</option>
                                                        <option value="TU">TU</option>
                                                        <option value="WED">WED</option>
                                                        <option value="THU">THU</option>
                                                        <option value="FRI">FRI</option>
                                                        <option value="SAT">SAT</option>
                                                        <option value="SUN">SUN</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <center><button type="submit" class="btn btn-success m-t-15 waves-effect">ตกลง</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> รายชื่อนิสิตผู้ช่วยสอน</h2>
                        </div>
                        <div class="body">
                            <div class="body table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <!-- <th>
                                                <center>
                                                    #
                                            </th> -->
                                            <th>
                                                <center>
                                                    รหัสนิสิต
                                            </th>
                                            <th>
                                                <center>
                                                    ชื่อ-นามสกุล
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($room as $x) { ?>
                                        <tr>
                                            <!-- <td>
                                                <center>
                                                    <?php echo $x->Room_id ?>
                                            </td> -->
                                            <td>
                                                <center>
                                                    <?php echo $x->Room_name ?>
                                            </td>
                                            <td>
                                                <center>
                                                    <button type="button" class="btn btn-danger btn-delete waves-effect m-r-20" data-toggle="modal" data-target="#deleteRoomModal">ลบ</button>
                                            </td>
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
</body>

</html>