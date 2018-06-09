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
                <div class="col-lg-12">   
                    <div class="card">
                        <div class="header">
                            <h2>
                                ตั้งค่า
                            </h2>
                        </div> 
                        <div class="body">
                            <form action="" method="">
                                <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="col-xs-12">
                                        <!-- Nav tabs -->
                                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                                    <li role="presentation" class="active"><a href="#home_animation_2" data-toggle="tab">ระยะเวลาการสมัคร</a></li>
                                                    <li role="presentation"><a href="#messages_animation_2" data-toggle="tab">เอกสาร</a></li>
                                                    <li role="presentation"><a href="#settings_animation_2" data-toggle="tab">SETTINGS</a></li>
                                                </ul>

                                        <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home_animation_2">
                                                    <div class="col-lg-8">
                                                        <div class="switch">
                                                            <label>
                                                                <input <?=($semester->isOpen == 1)? 'checked': ''?> name="isopen" type="checkbox">
                                                                <span class="lever switch-col-green">
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <div class="col-lg-12 align-right">
                                                                <button name="btnSave" type="button" class="btn btn-success m-t-15 waves-effect">ตกลง</button>
                                                                <button name="btnReset" type="button" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button>
                                                            </div>
                                                        </div> 
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="messages_animation_2">
                                                    <b>Message Content</b>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                                        aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                                        gubergren sadipscing mel.
                                                    </p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="settings_animation_2">
                                                    <b>Settings Content</b>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                                        aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                                        gubergren sadipscing mel.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            var isOpen = false;
            $('button[name=btnSave]').click(function(){
                var isopen = $('input[name=isopen]').prop('checked');
                $.get("<?=base_url()?>index.php/Config/OpenRegister", { isOpen: (isopen)? 1 : 0 }, function(data){
                    isOpen = isopen;
                    if(isopen){
                        swal("บันทึกสำเร็จ!", "เปิดรับสมัคร เรียบร้อย", "success");
                    }else{
                        swal("บันทึกสำเร็จ!", "ปิดรับสมัคร เรียบร้อย", "success");
                    }
                });
            })

            $('button[name=btnReset]').click(function(){
                $('input[name=isopen]').prop('checked', isOpen);
            })
        })
    </script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>/js/demo.js"></script>
</body>

</html>