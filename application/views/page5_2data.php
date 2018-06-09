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

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="../css/themes/all-themes.css" rel="stylesheet" />

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="wrapper">
        <?php require_once 'header.php'?>
        <?php require_once 'slidebar.php'?>
        <!-- <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div> -->
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
                                ค้นหา
                            </h2>
                            <br>
                        <div class="body">
                            <form>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="" class="form-control" placeholder="">
                                        <label class="form-label">รหัสนิสิต</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="" class="form-control" placeholder="">
                                        <label class="form-label">ชื่อ</label>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="" class="form-control" placeholder="">
                                        <label class="form-label">นามสกุล</label>
                                    </div>
                                </div>
                                </div>
                                    <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="checkbox" name="gender" id="grade" class="filled-in">
                                                <label for="grade">เกรดขั้นต่ำของรายวิชา</label>
                                                <input type="grade" class="form-control" placeholder="grade">
                                            </div>
                                        </div>
                                    </div>  -->
                                    <button type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">ค้นหา</button>
                                    <!-- <button type="button" class="btn btn-danger btn-lg m-l-15 waves-effect">ยกเลิก</button> -->
                                </div>
                            </form>
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

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

</body>
</html>