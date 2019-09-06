<!DOCTYPE html>
<html lang="en">
<head>
 <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
	<title></title>
	 <!-- Icons-->
   <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.2.3.min.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <link href="<?php echo base_url('assets/vendors/@coreui/icons/css/coreui-icons.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendors/simple-line-icons/css/simple-line-icons.css') ?>" rel="stylesheet" type="text/css">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('assets/css/style.css" rel="stylesheet" type="text/css') ?>">
    <link href="<?php echo base_url('assets/vendors/pace-progress/css/pace.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="<?php echo base_url('assets/images/Logo1.png') ?>" width="150" height="50" alt="CoreUI Logo">
       <img class="navbar-brand-minimized" src="<?php echo base_url('assets/images/logo.png') ?>" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
 
      <ul class="nav navbar-nav ml-auto">

      </ul>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/profile_admin/index') ?>">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-title">Menu</li>
                   <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/data_kriteria/index') ?>">
                    <i class="nav-icon icon-pencil"></i>Data Kriteria</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/data_parameter/index') ?>">
                    <i class="nav-icon icon-pencil"></i>Data Parameter</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/data_alternatif/index') ?>">
                    <i class="nav-icon icon-people"></i>Data Alternatif</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/data_nilai/index') ?>">
                    <i class="nav-icon icon-pencil"></i>Data Nilai</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#primaryModal" href="#">
                    <i class="nav-icon icon-calculator"></i>Proses Nilai</a>

                </li>
              <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/login/logout') ?>">
                <i class="nav-icon icon-logout"></i> Logout
              </a>
            </li>
</nav>
    
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
       <div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-primary" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Konfirmasi Kuota Calon Siswa Baru</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body form-group">
                <form class="form-horizontal" action="<?php echo base_url('index.php/profile_admin/validasi_proses?validasi') ?>" method="post">
                  <p>Masukan Jumlah Calon Siswa Baru Yang Diterima</p>
                   <div class="controls">
                          <div class="input-group">
                    <input class="form-control" id="appendedInput"  type="text" name="kuota" onkeypress="return hanyaAngka(event)" required>
                           </div>
                        </div>
         
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                  <button class="btn btn-primary" type="submit" name="btnSubmit">Proses</button>
                </div>
              </div>
              <!-- /.modal-content-->
            </div>
            <!-- /.modal-dialog-->
          </div>
          </form>
            <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>
</body>
</html>