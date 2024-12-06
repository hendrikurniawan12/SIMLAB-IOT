<!DOCTYPE html>
<html lang="en">

<head>
    <title>DaftarKehadiran</title>
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
    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">

    <!-- data tables css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/dataTables.bootstrap4.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">



</head>

<body class="" style="background-color:  #800000;">
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
                            <li class="list-inline-item"><a href="auth-signin.html" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
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
    <section class="pcoded-main-container" style="background-color: #F2E8C6;">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Daftar Kehadiran</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- Zero config table start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>DAFTAR KEHADIRAN</h5>
                            <?php
                            if (session()->getFlashdata('sukses')) {
                            ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('sukses') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="card-body">
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>

                                            <th>Tanggal</th>
                                            <th>Jam Masuk</th>
                                            <th>Jam Pulang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if (!empty($kehadiran)): ?>
                                            <?php $no = 1;
                                            foreach ($kehadiran as $row): ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>

                                                    <td><?= convertTanggal($row['tanggal_masuk']); ?></td>
                                                    <td><?= ambilJam($row['tanggal_masuk']); ?></td>
                                                    <td>
                                                        <?php
                                                        if ($row['tanggal_pulang'] == null) {
                                                            echo '-';
                                                        } else {
                                                            echo ambilJam($row['tanggal_pulang']);
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <?php
                                                        if ($row['tanggal_pulang'] == null) {
                                                            echo '-';
                                                        } else {
                                                        ?>
                                                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_detail_<?= $row['id_kehadiran'] ?>">
                                                                <i class="feather icon-edit"></i>Edit</button>
                                                            <div class="modal fade" id="modal_detail_<?= $row['id_kehadiran'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title h4" id="myLargeModalLabel">Kegiatan</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <form method="post" action="<?= base_url('Aslab/simpanKegiatan') ?>">
                                                                            <input type="text" name="id_kehadiran" value="<?= $row['id_kehadiran'] ?>" hidden>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                                                        <label>Tanggal</label>
                                                                                        <input type="text" class="form-control" value="<?= ambilTanggal($row['tanggal_pulang']) ?>" readonly>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                                                        <label>Jam Masuk</label>
                                                                                        <input type="text" class="form-control" value="<?= ambilJam($row['tanggal_masuk']) ?>" readonly>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                                                        <label>Jam Pulang</label>
                                                                                        <input type="text" class="form-control" value="<?= ambilJam($row['tanggal_pulang']) ?>" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <label style="font-weight: bold;">Kegiatan</label>
                                                                                        <textarea name="kegiatan" class="form-control" rows="4"><?= $row['kegiatan'] ?></textarea>
                                                                                    </div>
                                                                                    <!-- <div class="form-group">
                                                                                        <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
                                                                                    </div> -->

                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>

                                                    </td>

                                                    <!-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".form_edit_aslab_ " style="margin-bottom: 10px;">
                                                        <i class="feather icon-edit"></i>
                                                    </button> -->
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="6">Data tidak tersedia</td>
                                                </tr>
                                            <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Zero config table end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
        </div>
    </section>
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

    <!-- datatable Js -->
    <script src="<?= base_url() ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/js/pages/data-basic-custom.js"></script>
    <!-- <script>
        function coba() {
            alert('Test function');
        }
    </script> -->


</body>

</html>