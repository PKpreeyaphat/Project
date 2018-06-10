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

    <!-- Sweet Alert Css -->
    <link href="<?php echo base_url() ?>/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

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
        <?php require_once 'header.php'?>.
        <?php require_once 'sidebar_student.php'?>
    </div>
    <!-- #END# Page Loader -->
    <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   
                    <div class="card">
                        <!-- <div class="header">
                            <h2>
                                เพิ่มข้อมูลนิสิต
                            </h2>
                            <br>
                        </div>  -->
                        <div class="body">

                            <form action="" method="post">
                                <!-- <div class="demo-google-material-icon">
                                    <i class="material-icons">book</i>
                                    <label class="icon-name"> รหัสรายวิชา</label>
                                </div> -->
                                <div>
                                    <label>ชื่อ-นามสกุล</label>
                                    <label style="display: block; padding: 6px 12px;"><?=(isset($student))? $student->Student_firstname.' '.$student->Student_lastname : ''?></label>
                                </div>
                                <div>
                                    <label>เกรด</label>
                                    <label style="display: block; padding: 6px 12px;"><?=(isset($student))? $student->Student_grade : ''?></label>
                                </div>
                                <!-- <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="" name="Subject_id" class="form-control" placeholder="ที่อยู่">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <div class="form-line">

                                        <input value="<?=(isset($student))? $student->Student_email : ''?>" type="email" id="" name="email" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?=(isset($student))? $student->Student_tel : ''?>" type="text" id="" name="tel" class="form-control" placeholder="เบอร์โทรศัพท์">
                                    </div>
                                </div>
                                <button name="btnSave" type="button" class="btn btn-success m-t-15 waves-effect">ตกลง</button>
                                <button name="btnReset" type="button" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button>
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

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url() ?>/plugins/sweetalert/sweetalert.min.js"></script>

    <script>
        $(function(){
            var email = '<?=$student->Student_email?>';
            var tel = '<?=$student->Student_tel?>';
            $('button[name=btnSave]').click(function(){
                swal({
                    title: "Are you sure?",
                    text: "ต้องการสมัคร TA",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1f91f3",
                    confirmButtonText: "ใช่!",
                    confirmButtonColor: "#1f91f3",
                    cancelButtonText: "ยกเลิก!",                    
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    $.post("<?=base_url()?>index.php/Student/SaveStudent", {
                        email: $('input[name=email]').val(),
                        tel: $('input[name=tel]').val()
                    }, function(data){
                        email = $('input[name=email]').val();
                        tel = $('input[name=tel]').val();
                        swal("บันทึกสำเร็จ!", "รายละเอียดถูกบันทึกเรียบร้อย", "success");             
                    })
                });
            });

            $('button[name=btnReset]').click(function(){
                $('input[name=email]').val(email);
                $('input[name=tel]').val(tel);
            })
        });
    </script>

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