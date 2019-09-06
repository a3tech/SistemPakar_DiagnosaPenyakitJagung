<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.5
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="<?php echo base_url('assets/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet') ?>">
    <link href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/simple-line-icons/css/simple-line-icons.css') ?>" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/pace-progress/css/pace.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet" type="text/css">
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
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <?php echo $this->session->flashdata('gagal');?>
          <div class="card-group clearfix animated bounceIn">
            <div class="card p-4">
              <div class="card-body">
               <form class="form-horizontal" action="<?php echo base_url('index.php/sp_controller/login/index') ?>" method="post">
                <h1 align="center">Login User</h1><br/>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" id="appendedInput" name="username" placeholder="Username"  required>
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                <input type="password" class="form-control" id="appendedInput" name="password" placeholder="Password" required>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4 " id="appendedInput" type="submit" name="btnSubmit">Login</button>
                  </div>

                </div>
                </form>
              </div>
            </div>
            <div class="card bg-primaryy py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
               <div class="login-logo">
                  <img class="img-responsive" src="<?php echo base_url('assets/images/sp.png') ?>" width="200" height="200" alt="Company Logo" />
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url('assets/vendors/jquery/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/popper.js/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/pace-progress/js/pace.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/@coreui/coreui/js/coreui.min.js') ?>"></script>
  </body>
</html>
