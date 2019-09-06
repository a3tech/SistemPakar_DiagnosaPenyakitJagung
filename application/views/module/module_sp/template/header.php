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
    <link href="<?php echo base_url('assets/vendors/@coreui/icons/css/coreui-icons.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendors/simple-line-icons/css/simple-line-icons.css') ?>" rel="stylesheet" type="text/css">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('assets/css/style.css" rel="stylesheet" type="text/css') ?>">
    <link href="<?php echo base_url('assets/vendors/pace-progress/css/pace.min.css') ?>" rel="stylesheet" type="text/css">
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
       <img class="navbar-brand-full" src="<?php echo base_url('assets/images/sp.png') ?>" width="150" height="50" alt="CoreUI Logo">
       <img class="navbar-brand-minimized" src="<?php echo base_url('assets/images/sp.png') ?>" width="30" height="30" alt="CoreUI Logo">
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
              <a class="nav-link" href="<?php echo base_url('index.php/sp_controller/profile_admin/index'); ?>">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
          <li class="nav-title">Menu</li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/sp_controller/data_pengguna/index'); ?>">
                    <i class="nav-icon icon-people"></i>Data Pengguna</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/data_penyakit/index'); ?>">
                    <i class="nav-icon icon-pencil"></i>Data Penyakit</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/data_gejala/index'); ?>">
                    <i class="nav-icon icon-pencil"></i>Data Gejala</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/data_pengetahuan/index'); ?>">
                    <i class="nav-icon icon-pencil"></i>Data Pengetahuan</a>
                </li>
               <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/sp_controller/login/logout'); ?>">
                <i class="nav-icon icon-logout"></i> Logout
              </a>
            </li>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
   <ol class="breadcrumb">
   <li class="breadcrumb-item" align="center"><a href="#" >Sistem Pakar Diagnosa Penyakit Tanaman Jagung</a></li>
        </ol>
</body>
</html>