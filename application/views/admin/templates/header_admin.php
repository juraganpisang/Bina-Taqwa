<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Bina Taqwa</title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <!-- Font Awesome ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- //TEXT EDITOR -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <!-- Custom dari Tim Stiki, boleh edit css disini saja -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="<?= base_url('admin/beranda'); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" style="height:75px;" alt=""></a>
                            </div>
                            <!-- <div class="login-content">
                                <a href="#">Register / Login</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?= base_url(); ?>admin/beranda"><i class="fas fa-home"></i> Home</a></li>
                                    <li><a href="#"><i class="fas fa-user"></i> Profil</a>
                                        <ul style="width: 250px;" class="dropdown">
                                            <li><a href="<?= base_url(); ?>admin/tentang_yayasan">Tentang Yayasan</a></li>
                                            <li><a href="<?= base_url(); ?>admin/visi_misi">Visi dan Misi</a></li>
                                            <li><a href="<?= base_url(); ?>admin/struktur_organisasi">Struktur Organisasi</a></li>
                                            <li><a href="<?= base_url(); ?>admin/informasi_donatur">Informasi Donatur</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url(); ?>admin/berita"><i class="fas fa-newspaper"></i> Berita</a></li>
                                    <li><a href="#"><i class="fas fa-suitcase"></i> Program</a>
                                        <ul style="width: 200px;" class="dropdown">
                                            <li><a href="<?= base_url(); ?>admin/manasik_haji">Manasik Haji</a></li>
                                            <li><a href="<?= base_url(); ?>admin/kegiatan_dakwah">Kegiatan Dakwah</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url(); ?>admin/kontak"><i class="fas fa-phone-alt"></i> Kontak Kami</a></li>
                                    <li><a href="<?= base_url(); ?>admin/logout" class="text-danger"><i class="fas fa-sign-out-alt"></i> Keluar </a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+654563325568889"><i class="fas fa-phone-square-alt"></i> <span>(+65) 456 332 5568 889</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">