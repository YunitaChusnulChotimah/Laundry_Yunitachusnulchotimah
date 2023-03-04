<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $judul ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url("vendor/adminlte/") ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("vendor/adminlte/") ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    

    <!-- navbar -->
    <nav class="main-header navbar navbar-expand navbar- navbar-light" style="background-color: #aa858c;">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars" style="color: #d1ccb6;"></i>
        </a>
      </li>
     
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-primary elevation-4" style="background-color: #d1ccb6">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="  color: #aa858c;">
      <span class="brand-text font-dark-">Yunita's Laundry</span>
     
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block" style="  color: #aa858c;"><?= $this->session->userdata('nama') . ' - ' . $this->session->userdata('role'); ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="<?php echo base_url('dashboard') ?>" class="nav-link" style="  color: #aa858c;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
        </li>
        <?php if ($this->session->userdata('role') != 'admin'): ?>
          <?php if ($this->session->userdata('role') != 'owner'): ?>
        <li class="nav-item">
          <a href="<?php echo base_url('member') ?>" class="nav-link" style="  color: #aa858c;">
            <i class="far fa-user nav-icon"></i>
            <p>Data Member</p>
          </a>
        </li>
        <?php endif ?> 
        <?php endif ?>  

        <?php if ($this->session->userdata('role') != 'kasir'): ?>
          <?php if ($this->session->userdata('role') != 'owner'): ?>
            <li class="nav-item">
            <a href="#" class="nav-link" style="  color: #aa858c;">
            <i class="fas fa-box"></i>             
             <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('outlet') ?>" class="nav-link" style="  color: #aa858c;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Outlet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('paket') ?>" class="nav-link" style="  color: #aa858c;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Paket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('member') ?>" class="nav-link" style="  color: #aa858c;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('user') ?>" class="nav-link" style="  color: #aa858c;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              </ul>
              </li>
            <?php endif ?>  
          <?php endif ?>


          <?php if($this->session->userdata('role') != 'owner'): ?>
            <li class="nav-item">
            <a href="#" class="nav-link" style="  color: #aa858c;">
            <i class="fas fa-dollar-sign"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('transaksi/tambah') ?>" class="nav-link" style="  color: #aa858c;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('transaksi') ?>" class="nav-link" style="  color: #aa858c;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Riwayat Transaksi</p>
                </a>
              </li>
              </ul>
            <?php endif ?>

              <li class="nav-item">
            <a href="<?php echo base_url('laporan') ?>" class="nav-link" style="  color: #aa858c;">
              <i class="nav-icon fas fa-book"></i>
              <p>
                laporan
              </p>
            </a>
        </li>

              <li class="nav-item">
            <a href="<?php echo base_url('auth/logout') ?>" onclick="return confirm('Yakin ingin logout?')" class="nav-link" style="color: #aa858c;">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                logout
              </p>
            </a>
        </li>
 </li>
      
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #aa858c;">
    <!-- Content Header (Page header) -->

  <?php if ($judul != 'Tambah Transaksi'): ?>

 <div class="content-header" style="background-color: #aa858c;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0" style="color: #d1ccb6;"><?php echo $judul ?></h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php endif ?>

    <!-- Main content -->
 <div class="content">
      <div class="container-fluid">
        