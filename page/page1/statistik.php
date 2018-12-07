<!DOCTYPE html>
<html lang="en">
<?php
  include("../../koneksi.php");
  include("function.php");
//   include ("sessionAdmin.php");
  //include ("cekCookies.php");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>IEIMA | Statistic</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../../css/colors/blue.css" id="theme" rel="stylesheet">
      
    <!-- Page level plugin CSS-->
    <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Chartjs -->
    <script src="../../Chartjs/Chart.bundle.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style type="text/css">
        .sidebar-footer a {
        padding: 30px;
        width: 100%;
        float: left;
        text-align: center;
        font-size: 18px; }
        canvas{

        width:1000px !important;
        height:400px !important;

        }
    </style>
</head>


<?php
    include "getData.php";
    if(isset($_POST['cari'])){ 

        $awal = $_POST['mulai'];
        $akhir = $_POST['selesai'];
        $date1 = date('Y-m-d h:i:s', strtotime($awal)); 
        $date2 = date('Y-m-d h:i:s', strtotime($akhir)); 

        if($awal==""||$akhir=="")
        {
            echo '<script type="text/javascript">alert("Date 1 or Date 2 cannot null");</script>';
        }
        else if($date1<$date2)
        {
            getDataParam($awal, $akhir, 1);
            if($_POST['mulai'] == "" || $_POST['selesai'] == ""){
                getData(1);
            }   
        }
        else{
            echo '<script type="text/javascript">alert("Date 1 cannot greater than Date 2!");</script>';
        }
    } else {
        getData(1);
    }
?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img src="../../assets/images/logo.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         
                         <!-- Light Logo text -->    
                         <img src="../../assets/images/text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="userdashboard.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="statistik.php" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu">Statistic</span></a>
                        </li>
                        <!-- <li> <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Basic Table</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="icon-material.html" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Icons</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Google Map</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Blank Page</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Error 404</span></a>
                        </li> -->
                    </ul>
                    <div class="text-center m-t-30">
                        <!-- <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-warning hidden-md-down"> Upgrade to Pro</a> -->
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
            <!-- item--><a href="../../login.php" class="link" data-toggle="tooltip" title="Login"><i class="mdi mdi-login"></i>Log In</a> </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Statistic</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="userdashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Statistic</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <!-- <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Upgrade to Pro</a> -->
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <!-- Row -->
                <div class="row">
                    
                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <!-- <h3 class="card-title">Pencarian</h3> -->
                                                
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <form method="post" action="statistik.php">
                                            <div class="form-group">
                                                <label class="col-md-12">Start Date</label>
                                                <div class="col-md-12">
                                                    <input type="datetime-local" class="form-control" name="mulai">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Finish Date</label>
                                                <div class="col-md-12">
                                                    <input type="datetime-local" class="form-control" name="selesai">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div style="padding: 4px 10px; float: right;">
                                                    <input type="submit" name="cari" value="Search" class="btn btn-primary">
                                                </div>
                                                <!-- <div style="padding: 4px 10px; float: right;">
                                                    <input type="submit" name="batal" value="Back" class="btn btn-primary">
                                                </div> -->
                                            </div> 
                                            
                                        </form>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->

                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Temperature</h3>
                                                <?php updated(); ?>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" >
                                        <div style="overflow:scroll;">
                                            <?php include "linesuhu.php"; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->

                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Humidity</h3>
                                                <?php updated(); ?>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div style="overflow:scroll;">
                                            <?php include "linelembab.php"; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->

                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">CO Levels</h3>
                                                <?php updated(); ?>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div style="overflow:scroll;">
                                            <?php include "lineco.php"; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->

                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Noise</h3>
                                                <?php updated(); ?>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div style="overflow:scroll;">
                                            <?php include "linebising.php"; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->

                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Luminance</h3>
                                                <?php updated(); ?>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div style="overflow:scroll;">
                                            <?php include "lineintensitas.php"; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->

                </div>

                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script type="text/javascript">
        window.onload = function() {

        var chartEl = document.getElementById("chart1");
        window.myLine = new Chart(chartEl, {
            type: 'line',
            data: lineChartData,
            options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            },
            title:{
                display:true,
                text:'Environment Monitoring Graphic Today'
            },
            tooltips: {
                mode : 'label',
                enabled: true
            },
            hover: {
                mode: 'dataset'
            }
            }
        });

        var chartEl = document.getElementById("chart2");
        window.myLine = new Chart(chartEl, {
            type: 'line',
            data: lineChartData1,
            options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            },
            title:{
                display:true,
                text:'Environment Monitoring Graphic Today'
            },
            tooltips: {
                mode : 'label',
                enabled: true
            },
            hover: {
                mode: 'dataset'
            }
            }
        });

        var chartEl = document.getElementById("chart3");
        window.myLine = new Chart(chartEl, {
            type: 'line',
            data: lineChartData2,
            options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            },
            title:{
                display:true,
                text:'Environment Monitoring Graphic Today'
            },
            tooltips: {
                mode : 'label',
                enabled: true
            },
            hover: {
                mode: 'dataset'
            }
            }
        });

        var chartEl = document.getElementById("chart4");
        window.myLine = new Chart(chartEl, {
            type: 'line',
            data: lineChartData3,
            options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            },
            title:{
                display:true,
                text:'Environment Monitoring Graphic Today'
            },
            tooltips: {
                mode : 'label',
                enabled: true
            },
            hover: {
                mode: 'dataset'
            }
            }
        });
        var chartEl = document.getElementById("chart5");
        window.myLine = new Chart(chartEl, {
            type: 'line',
            data: lineChartData4,
            options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            },
            title:{
                display:true,
                text:'Environment Monitoring Graphic Today'
            },
            tooltips: {
                mode : 'label',
                enabled: true
            },
            hover: {
                mode: 'dataset'
            }
            }
        });
        };
    </script>

    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../../js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>

    <script src="../../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../../assets/plugins/d3/d3.min.js"></script>
    <script src="../../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="../../js/dashboard1.js"></script>
    
    <!-- Custom scripts for this page-->
    <script src="../../js/sb-admin-datatables.min.js"></script>

</body>

</html>
