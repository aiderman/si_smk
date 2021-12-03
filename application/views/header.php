<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistem Informasi Akademik Sekolah</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/') ?>./img/favicon1.png">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/et-line-icon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/responsive.css">
    <script src="<?php echo base_url('assets/') ?>js/vendor/modernizr-3.11.2.min.js"></script>



    <!--  assets1 start  -->
    <link href="<?php echo base_url('assets1/') ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url('assets1/') ?>css/owl-carousel/owl.carousel.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets1/') ?>css/owl-carousel/owl.theme.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets1/') ?>css/magnific-popup.css" type="text/css" rel="stylesheet" media="all" />
    <link href="<?php echo base_url('assets1/') ?>css/font.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url('assets1/') ?>css/fontello.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url('assets1/') ?>css/base.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url('assets1/') ?>css/main.css" rel="stylesheet" type="text/css" media="all" />
    <!-- assets1  end-->

</head>

<body>


    <!-- Header Area Start -->
    <header class="top">
        <div class="header-area header-sticky fixed">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo base_url('assets/') ?>img/logo/logo_si.png" alt="eduhome" /></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="content-wrapper one">
                            <!-- Main Menu Start -->
                            <div class="main-menu one text-end">
                                <nav>
                                    <ul>
                                        <li><a href="<?= base_url('C_master'); ?>">dasbor</a>

                                        </li>
                                        <li><a href="<?= base_url('C_master/sejarah'); ?>">Sejarah</a></li>
                                        <li><a href="<?= base_url('C_master/kegiatan'); ?>">Kegiatan</a>

                                        </li>
                                        <li><a href="<?= base_url('C_login/login_siswa'); ?>">Siswa</a>

                                        </li>
                                        <li class="hidden-sm"><a href="<?= base_url('C_login/login_guru'); ?>">guru</a>

                                        </li>
                                        <li><a href="<?= base_url('C_master/informasi'); ?>">informasi</a>

                                        </li>
                                        <li><a href="<?= base_url('C_master/kontak'); ?>">kontak</a></li>
                                        <!-- <li><a href="#"> <button><i class="fa fa-sign-out" aria-hidden="true" style="color:red; font-weight:bold;font-size:20px;"></i>
                                                    <h style="color: red;font-weight: bold;">LOGOUT</h>
                                                </button>
                                            </a> -->
                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-menu one"></div>
                            <!-- Main Menu End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Header Area End -->