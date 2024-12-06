<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daashboard</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- data tables css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/dataTables.bootstrap4.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">



</head>

<body class="" style="background-color: #800000;">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ menu ] start -->
    <nav class="pcoded-navbar menu-light ">
        <div class="navbar-wrapper" style="background-color: #DAD4B5;">
            <div class="navbar-content scroll-div ">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="<?= base_url() ?>assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details"><?= session()->get('nama_aslab') ?><i class="fa fa-caret-down"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
                            <li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
                            <li class="list-inline-item"><a href="<?=base_url('auth/logout')?>" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
                        </ul>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Menu</label>
                    </li>
                    <li class="nav-item"><a href="<?= base_url('Aslab/Dashboard') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Beranda</span></a></li>
                    <li class="nav-item"><a href="<?= base_url('Aslab/Data') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-check-square"></i></span><span class="pcoded-mtext">Data Kehadiran</span></a></li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="assets/images/logo.png" alt="" class="logo">

            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i> -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container" style="background-color: #F2E8C6;">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- support-section start -->

                <!-- support-section end -->
                <!-- support1-section start -->
                <div class="col-xl-4 col-md-6">
                    <div class="card support-bar">
                        <div class="card-body pb-0">
                            <h2 class="m-0">50</h2>
                            <span class="text-c-blue">JUMLAH ASLAB</span>
                            <p class="mb-3 mt-3">Total</p>
                        </div>
                        <div id="support-chart1" style="height:100px;width:100%;"></div>
                        <div class="card-footer bg-primary text-white">
                            <div class="row text-center">
                                <div class="col border-right">
                                    <h4 class="m-0 text-white">40</h4>
                                    <span>hadir</span>
                                </div>
                                <div class="col border-right">
                                    <h4 class="m-0 text-white">5</h4>
                                    <span>Izin</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white">5</h4>
                                    <span>Tidak Masuk</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- support-section1 end -->
                <!-- customer-section start -->
                <div class="col-xl-8 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6>Statistik</h6>
                            <span>Statistik Aslab yang hadir izin dan Tidak Masuk</span>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col">
                                    <div id="satisfaction-chart" style="height:200px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- customer-section end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    </div>

    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="<?= base_url() ?>assets/js/vendor-all.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/ripple.js"></script>
    <script src="<?= base_url() ?>assets/js/pcoded.min.js"></script>
    <script src="<?= base_url() ?>assets/js/menu-setting.min.js"></script>

    <!-- Apex Chart -->
    <script src="<?= base_url() ?>assets/js/plugins/apexcharts.min.js"></script>
    <!-- dashboard-custom js -->
    <script src="<?= base_url() ?>assets/js/pages/dashboard-help.js"></script>


</body>

</html>