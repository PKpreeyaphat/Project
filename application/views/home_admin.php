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
                                                    <select name="subject" class="form-control show-tick">
                                                        <option value="">รายวิชา</option>
                                                        <?php foreach ($subject as $x) { ?>
                                                            <option value="<?=$x->Subject_id?>"><?=$x->Subject_id.' '.$x->Subject_name?></option>
                                                        <?php } ?>
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
                                <center><button name="btnok" type="button" class="btn btn-success m-t-15 waves-effect">ตกลง</button></center>
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
                                <table class="table table-center">
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
                                    <tbody id="tbody">
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

    <script>
        $(function(){
            $('button[name=btnok]').click(function(){
                var subject_id = $('select[name=subject]').val();
                $.post("<?=base_url()?>index.php/HomeAdmin/Students", { subject_id: subject_id }, function(data){
                    data = JSON.parse(data);
                    var html = '';
                    for(var i in data){
                        html += '<tr><td>'+data[i].Student_id+'</td>'+
                            '<td>'+data[i].Student_firstname+' '+data[i].Student_lastname+'</td></tr>';
                    }
                    $('#tbody').html(html);
                });
            });
        })
    </script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>/js/demo.js"></script>
</body>

</html>