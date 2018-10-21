<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($this->session->userdata('status') != "login") {
    redirect('login/index');
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/images/favicon.png'?>">
    <title>Nasabah</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap/bootstrap.min.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/helper.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">                	
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Data Profil</li>
                        <li> <a href="<?php echo base_url().'get_data_nasabah/profil' ?>" aria-expanded="false"><i class="fa fa-user"></i>Profil Anda</a>
                        </li>
                        <li class="nav-label">Tabungan</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Tabungan Anda</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url().'get_data_nasabah/tabungan'?>">Lihat Tabungan</a></li>
                                <li><a href="<?php echo base_url().'get_data_nasabah/view_transfer'?>">Transfer</a></li>
                                <li><a href="<?php echo base_url().'get_data_nasabah/view_pembayaran'?>">Pembayaran</a></li>
                                <li><a href="<?php echo base_url().'get_data_nasabah/view_pulsa'?>">Beli Pulsa</a></li>
                                <li><a href="<?php echo base_url().'get_data_nasabah/riwayat'?>">Riwayat Transaksi</a></li>
                            </ul>
                        </li>                        
                        <li class="nav-label">Pinjaman</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Pinjaman Anda</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url().'get_data_nasabah/pinjaman'?>">Lihat Riwayat Pinjaman</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Pengaturan</li>
                        <li> <a href="<?php echo base_url().'get_data_nasabah/pengaturan_akun' ?>" aria-expanded="false"><i class="fa fa-wpforms"></i>Akun</a>
                        </li>
                        <li> <a href="<?php echo base_url().'get_data_nasabah/pengaturan_profil' ?>" aria-expanded="false"><i class="fa fa-wpforms"></i>Profil</a>
                        </li>
                        <br>
                        <li> <a href="<?php echo base_url().'login/logout' ?>" aria-expanded="false"><i class="fa fa-tachometer"></i>Logout</a>
                        </li>                      
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- All Jquery -->
    <!-- All Jquery -->
    <script src="<?php echo base_url().'assets/js/lib/jquery/jquery.min.js'?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/lib/bootstrap/js/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/bootstrap/js/bootstrap.min.js'?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url().'assets/js/jquery.slimscroll.js'?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url().'assets/js/sidebarmenu.js'?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url().'assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js'?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url().'assets/js/custom.min.js'?>"></script>