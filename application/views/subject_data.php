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

<body class="theme-red">
    <!-- Page Loader -->
    <div class="wrapper">
        <?php require_once 'header.php'?>
        <?php require_once 'sidebar_admin.php'?>
    </div>

    <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>รายวิชาทั้งหมด</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                <a href="<?php echo base_url(); ?>index.php/InputData"><button type="button" class="btn btn-success waves-effect m-r-20">เพิ่มรายวิชา</button></a>
                                <a href="<?php echo base_url(); ?>index.php/DetailData"><button type="button" class="btn btn-success waves-effect m-r-20">เพิ่มรายละเอียดรายวิชา</button></a>
                                <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#import_subject">นำเข้ารายวิชา</button>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="body table-responsive">
                                <!-- <table class="table">
                                    <thead>
                                        <tr>
                                            <th>รหัสรายวิชา</th>
                                            <th>ชื่อรายวิชา</th>
                                            <th>กลุ่ม</th>
                                            <th>จำนวนนิสิต</th>
                                            <th>วัน</th>
                                            <th>เวลาเรียน</th>
                                            <th>ห้อง</th>
                                            <th>อ.ผู้สอน/ผู้ประสานงาน</th>
                                            <th>การดำเนินการ</th>
                                        </tr>
                                    </thead>
                                </table> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>COURSECODE1</th>
                                            <th>txtCoursename</th>
                                            <th>Text72</th>
                                            <th>Text94</th>
                                            <th>txtDay</th>
                                            <th>txtOther</th>
                                            <th>txtOfficer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($csvData as $row) { ?>
                                        <tr>
                                            <td><?php echo $row["COURSECODE1"] ?></td>
                                            <td><?php echo substr($row["txtCoursename"],0, 45) ?></td>
                                            <td><?php echo substr($row["Text72"],0, 1) ?></td>
                                            <td><?php echo $row["Text94"] ?></td>
                                            <td><?php echo $row["txtDay"] ?></td>
                                            <td><?php echo $row["txtOther"] ?></td>
                                            <td><?php echo $row["txtOfficer"] ?></td>
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

    <div class="modal fade" id="import_subject" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">นำเข้ารายวิชา</h4>
                </div>
                <?php echo form_open_multipart('ImportData/uploadFile'); ?>
                <div class="modal-body">
                    <input type="file" id="" name="excel_file" class="form-control" placeholder="">
                    <hr>
                    <div class="form-group">
                        <h5>
                            ตัวอย่างไฟล์
                        </h5>
                        <div class="images">
                            <img src="<?php echo base_url() ?>/images/pic_subject.PNG" width="100%" hight="" alt="subject"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">UPLOAD</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
                </form>
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