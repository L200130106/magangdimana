<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Magang Dimana">
        <link rel="shortcut icon" href="images/favicon.png">
        <title>GIS - Magang Dimana</title>
        <!--Core CSS -->
        <link href="<?php echo base_url('assets/bs3/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/bootstrap-reset.css" rel="stylesheet'); ?>">
        <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/style-responsive.css'); ?>" rel="stylesheet"/>
        <style>
            .form-control{
                color: #555;
            }
        </style>
    </head>
    <body style="background-color: #d3d3d3">
        <section id="container">
            <header class="header fixed-top clearfix">
                <div class="brand">
                    <a href="<?php echo base_url('admin'); ?>" class="logo">
                        <h5>Magang Dimana</h5>
                    </a>
                    <div class="sidebar-toggle-box">
                        <div class="fa fa-bars"></div>
                    </div>
                </div>
                <div class="top-nav clearfix">
                    <ul class="nav pull-right top-menu">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="<?php echo base_url('assets/img/ava.jpg'); ?>">
                                <span class="username">Admin</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </header>
            <aside>
                <div id="sidebar" class="nav-collapse">
                    <div class="leftside-navigation">
                        <ul class="sidebar-menu" id="nav-accordion">
                            <li>
                                <a class="active" href="<?php echo base_url('admin'); ?>">
                                    <i class="fa fa-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-laptop"></i>
                                    <span>Kategori</span>
                                </a>
                                <ul class="sub">
                                    <li><a href="<?php echo base_url('admin/kategori/create'); ?>">Tambah Kategori</a></li>
                                    <li><a href="<?php echo base_url('admin/kategori/'); ?>">Daftar Kategori</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-laptop"></i>
                                    <span>Perusahaan</span>
                                </a>
                                <ul class="sub">
                                    <li><a href="<?php echo base_url('admin/perusahaan/create'); ?>">Tambah Perusahaan</a></li>
                                    <li><a href="<?php echo base_url('admin/perusahaan/'); ?>">Daftar Perusahaan</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-laptop"></i>
                                    <span>Info Perusahaan</span>
                                </a>
                                <ul class="sub">
                                    <li><a href="<?php echo base_url('admin/info/create'); ?>">Tambah Info Perusahaan</a></li>
                                    <li><a href="<?php echo base_url('admin/info/'); ?>">Daftar Info Perusahaan</a></li>
                                </ul>
                            </li>

                        </ul>            
                    </div>
                </div>
            </aside>
            <section id="main-content">
                <section class="wrapper">
                    <?php echo $contents; ?>
                </section>
            </section>
        </section>
        <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js')?>"></script>
        <script src="<?php echo base_url('assets/bs3/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>"></script>
        <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
    </body>
</html>