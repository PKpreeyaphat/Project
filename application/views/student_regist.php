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

    <style>
        #tb > tbody > tr > td {
            cursor: pointer;
        }
    </style>

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
                            <h2>
                                แบบฟอร์มการสมัคร
                            </h2>
                        </div>
                        <?php
                        ?>
                        <div class="body table-responsive">
                            <form action="<?php echo base_url()."index.php/StudentRegist"?>" method="post">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input readonly type="text" id="" value="<?=(isset($student))? $student->Student_firstname : ''?>" name="Student_firstname" class="form-control" placeholder="ชื่อ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input readonly type="text" id="" value="<?=(isset($student))? $student->Student_lastname : ''?>" name="Student_lastname" class="form-control" placeholder="นามสกุล">
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="" value="<?=(isset($student))? $student->Grade : ''?>" name="Student_grade" class="form-control" placeholder="เกรดเฉลี่ยรายวิชา">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="" value="<?=(isset($student))? $student->Student_email : ''?>" name="Student_email" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="" value="<?=(isset($student))? $student->Student_tel : ''?>"  name="Student_tel" class="form-control" placeholder="เบอร์โทรศัพท์">
                                    </div>
                                </div>
                            </div>
                            <h5>ช่วงเวลาที่ต้องการปฏิบัติการ <?=(isset($subject))? $subject->Subject_id.' '.$subject->Subject_name : "" ?></h5>
                            <table id="tb" class="table table-bordered display dataTable with-check">
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
                                    <tr data-day="1">
                                        <th>จันทร์</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="12.00" data-end="13.50"></td>
                                        <td data-start="14.00" data-end="15.50"></td>
                                        <td data-start="16.00" data-end="17.50"></td>
                                        <td data-start="18.00" data-end="19.50"></td>
                                        <td data-start="20.00" data-end="21.50"></td>
                                    </tr>
                                    <tr data-day="2">
                                        <th>อังคาร</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="12.00" data-end="13.50"></td>
                                        <td data-start="14.00" data-end="15.50"></td>
                                        <td data-start="16.00" data-end="17.50"></td>
                                        <td data-start="18.00" data-end="19.50"></td>
                                        <td data-start="20.00" data-end="21.50"></td>
                                    </tr>
                                    <tr data-day="3">
                                        <th>พุธ</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="12.00" data-end="13.50"></td>
                                        <td data-start="14.00" data-end="15.50"></td>
                                        <td data-start="16.00" data-end="17.50"></td>
                                        <td data-start="18.00" data-end="19.50"></td>
                                        <td data-start="20.00" data-end="21.50"></td>
                                    </tr>
                                    <tr data-day="4">
                                        <th>พฤหัสบดี</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="12.00" data-end="13.50"></td>
                                        <td data-start="14.00" data-end="15.50"></td>
                                        <td data-start="16.00" data-end="17.50"></td>
                                        <td data-start="18.00" data-end="19.50"></td>
                                        <td data-start="20.00" data-end="21.50"></td>
                                    </tr>
                                    <tr data-day="5">
                                        <th>ศุกร์</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="12.00" data-end="13.50"></td>
                                        <td data-start="14.00" data-end="15.50"></td>
                                        <td data-start="16.00" data-end="17.50"></td>
                                        <td data-start="18.00" data-end="19.50"></td>
                                        <td data-start="20.00" data-end="21.50"></td>
                                    </tr>
                                    <tr data-day="6">
                                        <th>เสาร์</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="12.00" data-end="13.50"></td>
                                        <td data-start="14.00" data-end="15.50"></td>
                                        <td data-start="16.00" data-end="17.50"></td>
                                        <td data-start="18.00" data-end="19.50"></td>
                                        <td data-start="20.00" data-end="21.50"></td>
                                    </tr>
                                    <tr data-day="0">
                                        <th>อาทิตย์</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="12.00" data-end="13.50"></td>
                                        <td data-start="14.00" data-end="15.50"></td>
                                        <td data-start="16.00" data-end="17.50"></td>
                                        <td data-start="18.00" data-end="19.50"></td>
                                        <td data-start="20.00" data-end="21.50"></td>
                                    </tr>
                                </tbody>
                            </table>
                                <center>
                                    <button <?=(isset($subject) && (isset($semester) && $semester->isOpen))? '':'disabled' ?> 
                                    type="button" name="btnsave" class="btn btn-primary m-t-15 waves-effect">ยืนยัน</button>
                                    <button name="btnDelete" type="reset" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button>
                                </center>
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
            var Subject_id = '<?=$subject->Subject_id?>'
            var json = JSON.parse('<?=json_encode($register)?>')
            var time = {
                1:{}, 
                2:{},
                3:{},
                4:{},
                5:{},
                6:{},
                0:{}
            }
            if(json.length > 0){
                time = json;
            }
            else{
                for(var day in time){
                    time[day] = {
                        '8.00-9.50': false, 
                        '10.00-11.50': false, 
                        '12.00-13.50': false, 
                        '14.00-15.50': false, 
                        '16.00-17.50': false, 
                        '18.00-19.50': false, 
                        '20.00-21.50': false
                    }
                }
            }

            var draw = function()
            {
                for(var day in time){
                    for(var t in time[day]){
                        var t_r = t.split('-');
                        if(time[day][t]){
                            $('tr[data-day='+day+']').find('td[data-start="'+t_r[0]+'"][data-end="'+t_r[1]+'"]')
                                .css('background-color', '#ffcc33');
                        }
                    }
                }
            };

            draw();
            $('#tb').on('click', 'tbody > tr > td', function(){
                // add
                var day = $(this).parents('tr').data('day');
                var t = $(this).data('start') + '-' + $(this).data('end');
                if($(this).css('background-color') != 'rgb(255, 204, 51)'){
                    $(this).css('background-color', '#ffcc33');
                    time[day][t] = true
                }
                // remove
                else{
                    $(this).css('background-color', '#fff')
                    time[day][t] = false
                }
                console.log(time);
            });

            <?php
                if(isset($subject) && (isset($semester) && $semester->isOpen))
                { ?>
            $('button[name=btnsave]').click(function(){
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
                    $.post("<?=base_url()?>index.php/StudentRegist/SaveRegister", {
                        Student_grade: $('input[name=Student_grade]').val(),
                        Student_email: $('input[name=Student_email]').val(),
                        Student_tel: $('input[name=Student_tel]').val(),
                        Subject_id: Subject_id,
                        time: JSON.stringify( time )
                    }, function(data){
                        swal("บันทึกสำเร็จ!", "รายละเอียดถูกบันทึกเรียบร้อย", "success");
                        //window.location.href = 'HomeStudent';                 
                    })
                });
            });

            <?php } ?>
        });
    </script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>/js/admin.js"></script>
    <script src="<?php echo base_url() ?>/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>/js/demo.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script> -->

</body>

</html>