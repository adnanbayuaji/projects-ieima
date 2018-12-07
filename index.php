<!DOCTYPE html>
<html lang="en">
<?php
//   include("koneksi.php");
//   include("function.php");
//   include("function_roominfo.php");
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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>IEIMA | Dashboard</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">

    <!-- Chartjs -->
    <script src="Chartjs/Chart.bundle.js"></script>


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
            font-size: 18px;
        }

        .bg-gradient {
            background: #C9D6FF;
            background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);
            background: linear-gradient(to right, #E2E2E2, #C9D6FF);
        }

        ul li {
            margin-bottom: 1.4rem;
        }

        .pricing-divider {
            border-radius: 20px;
            background: #C64545;
            padding: 1em 0 4em;
            position: relative;
        }

        .blue .pricing-divider {
            background: #2D5772;
        }

        .green .pricing-divider {
            background: #1AA85C;
        }

        .red b {
            color: #C64545
        }

        .blue b {
            color: #2D5772
        }

        .green b {
            color: #1AA85C
        }

        .pricing-divider-img {
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 80px;
        }

        .deco-layer {
            -webkit-transition: -webkit-transform 0.5s;
            transition: transform 0.5s;
        }

        .btn-custom {
            background: #C64545;
            color: #fff;
            border-radius: 20px
        }

        .img-float {
            width: 50px;
            position: absolute;
            top: -3.5rem;
            right: 1rem
        }

        .princing-item {
            transition: all 150ms ease-out;
        }

        .princing-item:hover {
            transform: scale(1.05);
        }

        .princing-item:hover .deco-layer--1 {
            -webkit-transform: translate3d(15px, 0, 0);
            transform: translate3d(15px, 0, 0);
        }

        .princing-item:hover .deco-layer--2 {
            -webkit-transform: translate3d(-15px, 0, 0);
            transform: translate3d(-15px, 0, 0);
        }
    </style>
</head>

<body class="fix-header fix-sidebar card-no-border">


    <script src="gauge/dist/gauge.js"></script>


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
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->

                            <!-- Light Logo icon -->
                            <img src="assets/images/logo.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>

                            <!-- Light Logo text -->
                            <img src="assets/images/text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
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
                        <!-- <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="statistik.php" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu">Statistic</span></a>
                        </li> -->
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
                <!-- item--><a href="login.php" class="link" data-toggle="tooltip" title="Login"><i class="mdi mdi-login"></i>Log
                    In</a> </div>
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
                        <h3 class="text-themecolor">Choose Information Room</h3>
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="index.php"></a></li>
                            <li class="breadcrumb-item active"></li> -->
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
                <div class="row m-auto text-center w-75">
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 princing-item red">
                        <div class="pricing-divider ">
                            <h3 class="text-light" style="font-size:2vw;">Room</h3>
                            <h4 class="my-0 display-2 text-light font-weight-normal mb-3" style="font-size:6vw;">213</h4>
                            <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1'
                                preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px'
                                xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg'
                                y='0px'>
                                <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z'
                                    fill='#FFFFFF' opacity='0.6'></path>
                                <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z'
                                    fill='#FFFFFF' opacity='0.6'></path>
                                <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z'
                                    fill='#FFFFFF' opacity='0.7'></path>
                                <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z'
                                    fill='#FFFFFF'></path>
                            </svg>
                        </div>
                        <div class="card-body bg-white mt-0 shadow">
                            <!-- <ul class="list-unstyled mb-5 position-relative">
              <li><b>10</b> users included</li>
              <li><b>2 GB</b> of storage</li>
              <li><b>Free </b>Email support</li>
              <li><b>Help center access</b></li>
            </ul> -->
                            <button type="button" onclick="function_one()" class="btn btn-lg btn-block  btn-custom " style="font-size:1vw;">Check
                                This Out!</button>
                        </div>
                    </div>




                    <div class="col-lg-4 col-md-4 col-sm-4 princing-item blue">
                        <div class="pricing-divider ">
                            <h3 class="text-light" style="font-size:2vw;">Room</h3>
                            <h4 class="my-0 display-2 text-light font-weight-normal mb-3" style="font-size:6vw;">407</h4>
                            <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1'
                                preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px'
                                xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg'
                                y='0px'>
                                <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z'
                                    fill='#FFFFFF' opacity='0.6'></path>
                                <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z'
                                    fill='#FFFFFF' opacity='0.6'></path>
                                <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z'
                                    fill='#FFFFFF' opacity='0.7'></path>
                                <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z'
                                    fill='#FFFFFF'></path>
                            </svg>
                        </div>

                        <div class="card-body bg-white mt-0 shadow">
                            <!-- <ul class="list-unstyled mb-5 position-relative">
              <li><b>100 </b>users included</li>
              <li><b>10 GB</b> of storage</li>
              <li><b>Free</b>Email support</li>
              <li><b>Help center access</b></li>
            </ul> -->
                            <button type="button" onclick="function_two()" class="btn btn-lg btn-block  btn-custom" style="font-size:1vw;">Check This Out!</button>
                        </div>
                    </div>






                    <div class="col-lg-4 col-md-4 col-sm-4 princing-item green">
                        <div class="pricing-divider ">
                            <h3 class="text-light" style="font-size:2vw;">Room</h3>
                            <h4 class="my-0 display-2 text-light font-weight-normal mb-3" style="font-size:6vw;">413</h4>
                            <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1'
                                preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px'
                                xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg'
                                y='0px'>
                                <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z'
                                    fill='#FFFFFF' opacity='0.6'></path>
                                <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z'
                                    fill='#FFFFFF' opacity='0.6'></path>
                                <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z'
                                    fill='#FFFFFF' opacity='0.7'></path>
                                <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z'
                                    fill='#FFFFFF'></path>
                            </svg>
                        </div>

                        <div class="card-body bg-white mt-0 shadow">
                            <!-- <ul class="list-unstyled mb-5 position-relative">
              <li><b>300</b> users included</li>
              <li><b>20 GB</b> of storage</li>
              <li><b>Free</b> Email support</li>
              <li><b>Help center access</b></li>
            </ul> -->
                            <button type="button" onclick="function_three()" class="btn btn-lg btn-block  btn-custom " style="font-size:1vw;">Check This Out!</button>
                        </div>
                    </div>
                </div>
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

    <script type="text/javascript">
        function function_one() {
            window.location.href = "page/page1/userdashboard.php"
        }
        function function_two() {
            window.location.href = "page/page2/userdashboard.php"
        }
        function function_three() {
            window.location.href = "page/page3/userdashboard.php"
        }
    </script>
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/plugins/d3/d3.min.js"></script>
    <script src="assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>


</body>

</html>