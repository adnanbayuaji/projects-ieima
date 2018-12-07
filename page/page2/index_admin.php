<!DOCTYPE html>
<html lang="en">
<?php
  include("../../koneksi.php");
  include("function.php");
  include("function_roominfo.php");
  include("../../sessionAdmin1.php");
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
    <title>IEIMA | Dashboard</title>
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
    </style>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <script src="../../gauge/dist/gauge.js"></script>
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
                    <a class="navbar-brand" href="../../start_admin.php">
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
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                                  <!-- Notifications: style can be found in dropdown.less -->
                                  <!-- <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li> -->

                                    <?php
                                            // $querynotif = "SELECT dd.detail_keterangan as ket, d.data_waktu as waktu FROM detail_data dd JOIN data d ON dd.detail_iddata = d.data_id WHERE dd.detail_status = 1 AND d.data_waktu LIKE '$waktuUp%'";

                                              date_default_timezone_set("Asia/Jakarta");
                                              $time = date("Y-m-d H");  
                                              $a=0;
                                              $querynotif = "SELECT dd.detail_keterangan as ket, d.data_waktu as waktu FROM detail_data dd JOIN data d ON dd.detail_iddata = d.data_id WHERE dd.detail_status = 1 AND d.data_waktu LIKE '".$time."%' AND d.sensor = 2";

                                              //$querynotif = "SELECT dd.detail_keterangan as ket, d.data_waktu as waktu FROM detail_data dd JOIN data d ON dd.detail_iddata = d.data_id WHERE dd.detail_status = 1 AND d.data_waktu LIKE '2017-10-23%'";
                                              $notif = mysqli_query($con, $querynotif);
                                              while ($rownotif = mysqli_fetch_array($notif, MYSQLI_ASSOC)) {
                                                $a++;
                                              }
                                            ?>

                                  <li class="dropdown notifications-menu nav-item">
                                    <a href="#" class="nav-link dropdown-toggle text-muted waves-effect waves-dark dropdown-toggle" data-toggle="dropdown">
                                      <i class="fa fa-bell-o"></i>
                                      <?php 
                                        if($a!=0)
                                        {
                                       ?>
                                      <span class="label label-warning"><?php echo $a; ?></span>
                                      <?php 
                                        } 
                                        ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li class="header">You have <?php echo $a; ?> notifications</li>
                                      <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                          <?php
                                            // $querynotif = "SELECT dd.detail_keterangan as ket, d.data_waktu as waktu FROM detail_data dd JOIN data d ON dd.detail_iddata = d.data_id WHERE dd.detail_status = 1 AND d.data_waktu LIKE '$waktuUp%'";

                                              date_default_timezone_set("Asia/Jakarta");
                                              $time = date("Y-m-d H");  
                                              $querynotif = "SELECT dd.detail_keterangan as ket, d.data_waktu as waktu, CASE WHEN d.sensor = 1 THEN 'R213' WHEN d.sensor = 2 THEN 'R407' WHEN d.sensor = 3 THEN 'R413' END as sensor FROM detail_data dd JOIN data d ON dd.detail_iddata = d.data_id WHERE dd.detail_status = 1 AND d.data_waktu LIKE '".$time."%' AND d.sensor = 2";

                                              //$querynotif = "SELECT dd.detail_keterangan as ket, d.data_waktu as waktu FROM detail_data dd JOIN data d ON dd.detail_iddata = d.data_id WHERE dd.detail_status = 1 AND d.data_waktu LIKE '2017-10-23%'";
                                              $notif = mysqli_query($con, $querynotif);
                                              while ($rownotif = mysqli_fetch_array($notif, MYSQLI_ASSOC)) {
                                            ?>
                                            <li>
                                                <span class="text-muted" style="padding-left: 10px">
                                                    <strong><?php echo $rownotif['sensor'].": ".$rownotif['waktu']; ?></strong>
                                                </span>

                                                  
                                                  <!-- <span class="small float-right text-muted"></span> -->
                                                  <div class="dropdown-message small" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;"><?php echo $rownotif['ket']; ?></div>
                                            </li>
                                            <?php
                                              }
                                            ?>
                                        </ul>
                                      </li>
                                      <li class="" style="text-align: center;"><a href="#">View all</a></li>
                                    </ul>
                                  </li>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/avatar5.png" alt="user" class="profile-pic m-r-10" />Administrator</a>
                        </li>
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
                        <li> <a class="waves-effect waves-dark" href="index_admin.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="statistik_admin.php" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu">Statistic</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="report_admin.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Report</span></a>
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
                <!-- item--><!-- <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a> -->
                <!-- item--><!-- <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a> -->
                <!-- item--><a href="../../logout.php" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
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
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index_admin.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
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
                    <div class="col-lg-9 col-md-9">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Room Information</h3>
                                                <?php updated(); ?>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <?php 
                                        $array_done = [];
                                        $array_done = function_roominfo(); ?>
                                        <!-- <h3 style="text-align: center">Error aaaaaaaaaaaaaa
                                        aaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaaaaa </h3> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                Message List Action:
                                <ul>
                                <?php 
                                    foreach ($array_done as $value) {
                                        echo "<li>".$value."</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->

                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-3 col-md-3">
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
                                    <div class="col-12">
                                        <?php 
                                            chart_suhu();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->
                </div>

                <!-- Row -->
                <div class="row">


                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-3 col-md-3">
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
                                        <?php 
                                            chart_kelembapan();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->


                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-3 col-md-3">
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
                                        <?php 
                                            chart_co();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->

                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-3 col-md-3">
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
                                        <?php 
                                            chart_kebisingan();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->

                    <!-- Customize -->
                    <!-- ********* -->
                    <div class="col-lg-3 col-md-3">
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
                                        <?php 
                                            chart_intensitas();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end customize -->

                </div>
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
    <script src="../../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../../assets/plugins/d3/d3.min.js"></script>
    <script src="../../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="../../js/dashboard1.js"></script>

</body>

</html>
