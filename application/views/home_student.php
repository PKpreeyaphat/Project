<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ระบบจัดการนิสิตผู้ช่วยสอน</title>

    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-amber">
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
                        <h2> รายวิชาที่เปิดรับสมัคร ภาคเรียนที่ <?=$semester->Semester_Name?></h2>
                    </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="">ชื่อรายวิชา</label>
                                        <?php foreach ($subject as $x) { ?>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                <button class="btn btn-default m-r-15 m-t-15 waves-effect"><?=$x->Subject_id.' '.$x->Subject_name?></button>
                                                <?php
                                                if($semester->isOpen == 1){
                                                    ?>
                                                    <button name="sel-subject" data-id="<?=$x->Subject_id?>" 
                                                    type="<?=($x->Student_id == null)? 'submit': 'button'?>" 
                                                    class="btn btn-success m-t-15 waves-effect"><?=($x->Student_id == null)? 'สมัคร' : 'สมัครแล้ว'?></button>
                                                <?php
                                                }
                                                else if($x->Student_id != null){
                                                ?>
                                                    <button name="sel-subject" data-id="<?=$x->Subject_id?>" type="button" class="btn btn-success m-t-15 waves-effect">สมัครแล้ว</button>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <script>
        $( document ).ready(function() {
            $('button[name=sel-subject]').click(function(){
                var id = $(this).data('id');
                console.log(id);
                $.post("<?=base_url()?>index.php/HomeStudent/SelectSubject", {'id': id}, function(data){
                    window.location.href = "StudentRegist";
                });
            });
        });
    </script>


    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
    
</body>

</html>