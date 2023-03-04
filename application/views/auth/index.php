<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("vendor/adminlte/") ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url("vendor/adminlte/") ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("vendor/adminlte/") ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-color: #aa858c;">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url("vendor/adminlte/") ?>index2.html" style="color: #d1ccb6;"><b>Selamat Datang</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="background-color: #d1ccb6;">
      <p class="login-box-msg" style="color: #aa858c;">Masukkan username dan password anda</p>

      <?php if ($error = $this->session->flashdata('error')): ?>
      <div class="alert alert-" style="background-color: #d1ccb6;">
        <strong style="color: #aa858c;">Perhatian</strong>
        <p style="color: #aa858c;"><?php echo $error ?></p> 
      </div>
      <?php endif ?>
      <form method="post" action="<?= base_url('auth/index/'); ?>">
        <div class="input-group mb-3" style="background-color: #aa858c;">
          <input type="text" class="form-control" style="background-color: #aa858c;" placeholder="username" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text" style="color: #d1ccb6;">
              <span class="fas fa-envelope" ></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3" style="background-color: #aa858c;">
          <input type="password" class="form-control" style="background-color: #aa858c;" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text" style="color: #d1ccb6;">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4" >
            <button type="submit" class="btn btn- btn-block" style="background-color: #aa858c; color: #d1ccb6;">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url("vendor/adminlte/") ?> plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url("vendor/adminlte/") ?> plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("vendor/adminlte/") ?> dist/js/adminlte.min.js"></script>
</body>
</html>
