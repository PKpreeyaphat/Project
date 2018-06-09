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
    table.dataTable tbody>tr.selected,table.dataTable tbody>tr>.selected{background-color:#B0BED9}table.dataTable.stripe tbody>tr.odd.selected,table.dataTable.stripe tbody>tr.odd>.selected,table.dataTable.display tbody>tr.odd.selected,table.dataTable.display tbody>tr.odd>.selected{background-color:#acbad4}table.dataTable.hover tbody>tr.selected:hover,table.dataTable.hover tbody>tr>.selected:hover,table.dataTable.display tbody>tr.selected:hover,table.dataTable.display tbody>tr>.selected:hover{background-color:#aab7d1}table.dataTable.order-column tbody>tr.selected>.sorting_1,table.dataTable.order-column tbody>tr.selected>.sorting_2,table.dataTable.order-column tbody>tr.selected>.sorting_3,table.dataTable.order-column tbody>tr>.selected,table.dataTable.display tbody>tr.selected>.sorting_1,table.dataTable.display tbody>tr.selected>.sorting_2,table.dataTable.display tbody>tr.selected>.sorting_3,table.dataTable.display tbody>tr>.selected{background-color:#acbad5}table.dataTable.display tbody>tr.odd.selected>.sorting_1,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_1{background-color:#a6b4cd}table.dataTable.display tbody>tr.odd.selected>.sorting_2,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_2{background-color:#a8b5cf}table.dataTable.display tbody>tr.odd.selected>.sorting_3,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_3{background-color:#a9b7d1}table.dataTable.display tbody>tr.even.selected>.sorting_1,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_1{background-color:#acbad5}table.dataTable.display tbody>tr.even.selected>.sorting_2,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_2{background-color:#aebcd6}table.dataTable.display tbody>tr.even.selected>.sorting_3,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_3{background-color:#afbdd8}table.dataTable.display tbody>tr.odd>.selected,table.dataTable.order-column.stripe tbody>tr.odd>.selected{background-color:#a6b4cd}table.dataTable.display tbody>tr.even>.selected,table.dataTable.order-column.stripe tbody>tr.even>.selected{background-color:#acbad5}table.dataTable.display tbody>tr.selected:hover>.sorting_1,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_1{background-color:#a2aec7}table.dataTable.display tbody>tr.selected:hover>.sorting_2,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_2{background-color:#a3b0c9}table.dataTable.display tbody>tr.selected:hover>.sorting_3,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_3{background-color:#a5b2cb}table.dataTable.display tbody>tr:hover>.selected,table.dataTable.display tbody>tr>.selected:hover,table.dataTable.order-column.hover tbody>tr:hover>.selected,table.dataTable.order-column.hover tbody>tr>.selected:hover{background-color:#a2aec7}table.dataTable tbody td.select-checkbox,table.dataTable tbody th.select-checkbox{position:relative}table.dataTable tbody td.select-checkbox:before,table.dataTable tbody td.select-checkbox:after,table.dataTable tbody th.select-checkbox:before,table.dataTable tbody th.select-checkbox:after{display:block;position:absolute;top:1.2em;left:50%;width:12px;height:12px;box-sizing:border-box}table.dataTable tbody td.select-checkbox:before,table.dataTable tbody th.select-checkbox:before{content:' ';margin-top:-6px;margin-left:-6px;border:1px solid black;border-radius:3px}table.dataTable tr.selected td.select-checkbox:after,table.dataTable tr.selected th.select-checkbox:after{content:'\2714';margin-top:-11px;margin-left:-4px;text-align:center;text-shadow:1px 1px #B0BED9, -1px -1px #B0BED9, 1px -1px #B0BED9, -1px 1px #B0BED9}div.dataTables_wrapper span.select-info,div.dataTables_wrapper span.select-item{margin-left:0.5em}@media screen and (max-width: 640px){div.dataTables_wrapper span.select-info,div.dataTables_wrapper span.select-item{margin-left:0;display:block}}
    </style>
</head>

<body class="theme-maroon">
    <!-- Page Loader -->
    <div class="wrapper">
        <?php require_once 'header.php';?>
        <?php require_once 'sidebar_admin.php';?>
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
                                <div class="col-lg-6">
                                    <h2>จัดตารางการทำงาน TA</h2>
                                </div>

                                <div class="col-lg-6 align-right">
                                    <button type="button" class="btn btn-primary waves-effect m-r-20">จัดตาราง</button>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>เลือกห้อง :</b>
                                    </p>
                                    <select class="form-control show-tick" id="Room_id" oninput="loadTable();">
                                    <option>———กรุณาเลือก———</option>
                                    <?php 
                                        foreach ($getRoom as $resRoom) {
                                    ?>
                                        <option value="<?php echo $resRoom->Room_id ?>"><?php echo $resRoom->Room_name ?></option>
                                    <?php 
                                    }
                                    ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div id="loadTable">
                            
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

    <script type="text/javascript">
        function loadTable(){
            $.post('table/loadTable',{Room_id:""+$('select#Room_id').val()+""},function(res){
                $('div#loadTable').html(res);
            });
        }
    </script>

</body>

</html>