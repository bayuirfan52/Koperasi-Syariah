<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($this->session->userdata('status') != "adminlogin") {
    redirect('admin/index');
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
    <title>Administrator</title>
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
                        <li class="nav-label">Users</li>
                        <li> <a href="<?php echo base_url().'admin/data_anggota' ?>" aria-expanded="false"><i class="fa fa-users"></i>Data Anggota</a>
                        </li>
                        <li> <a href="<?php echo base_url().'admin/data_karyawan' ?>" aria-expanded="false"><i class="fa fa-users"></i>Data Karyawan</a>
                        </li>
                        <li class="nav-label">Manajemen Website</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Laman</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url().'admin/data_berita'?>">Berita</a></li>
                            </ul>
                        </li>
                        <li> <a href="<?php echo base_url().'admin/data_admin' ?>" aria-expanded="false"><i class="fa fa-users"></i>Akun Administrator</a>
                        </li>
                        <li class="nav-label">Pengaturan</li>
                        <li> <a href="<?php echo base_url().'admin/edit_akun' ?>" aria-expanded="false"><i class="fa fa-book"></i>Akun</a>
                        </li>
                        <br>
                        <br>
                        <li> <a href="<?php echo base_url().'admin/logout' ?>" aria-expanded="false"><i class="fa fa-tachometer"></i>Logout</a>
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
