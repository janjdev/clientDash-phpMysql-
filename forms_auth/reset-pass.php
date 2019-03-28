<?php
//MySQL Database Connect
require '../auth/authenticated.php';
require '../auth/connect.php';
include '../data/user_data.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="http://dezineshop.co/favicon.ico" />
  <link rel="icon" type="image/png" href="http://dezineshop.co/favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>DezineShop< Client Dashboard ~Reset Password</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <!--  Tooltips -->
    <link rel="stylesheet" type="text/css" href="../assets/css/tooltip_style.css">

    <!--	Alerts -->
		<link rel="stylesheet" type="text/css" href="../assets/sweet-alert/css/sweetalert.css">

    <!--  Custom Styles     -->
    <link rel="stylesheet" type="text/css" href="../assets/css/nb-custom.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/custom.css">



</head>
<body class="nb-theme-cosmic" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
  <nb-auth _nghost-c0="">
    <nb-layout _ngcontent-c0="" _nghost-c1="">
    <!---->
    <div _ngcontent-c1="" class="scrollable-container">
      <div _ngcontent-c1="" class="layout">

        <div _ngcontent-c1="" class="layout-container">

          <div _ngcontent-c1="" class="content">
            <div _ngcontent-c1="" class="columns">
              <nb-layout-column _ngcontent-c0="">

        <nb-card _ngcontent-c0="" _nghost-c2="">




    <nb-card-body _ngcontent-c0="">
            <div _ngcontent-c0="" class="col-xl-4 col-lg-6 col-md-8 col-sm-12">
              <nb-reset-password-page _nghost-c3="">
    <nb-auth-block _ngcontent-c3="" _nghost-c4="">

      <h2 _ngcontent-c3="" class="title">Change password</h2>
      <small _ngcontent-c3="" class="form-text sub-title">Please enter a new password</small>
      <form _ngcontent-c3="" novalidate="" action="data/pass_update.php" method="post" class="ng-pristine ng-invalid ng-touched" enctype="application/x-www-form-urlencoded">

        <!---->
        <!---->

        <div _ngcontent-c3="" class="form-group">
          <label _ngcontent-c3="" class="sr-only" for="input-password">New Password</label>
          <input _ngcontent-c3="" autofocus="" class="form-control form-control-lg first ng-pristine ng-invalid ng-touched" id="input-password" name="password" placeholder="New Password" type="password" required="" minlength="4" maxlength="50">
          <!---->
          <!---->
        </div>

        <div _ngcontent-c3="" class="form-group">
          <label _ngcontent-c3="" class="sr-only" for="input-re-password">Confirm Password</label>
          <input _ngcontent-c3="" class="form-control form-control-lg last ng-untouched ng-pristine ng-invalid" id="input-re-password" name="rePass" placeholder="Confirm Password" type="password" required="">
          <!---->
          <!---->
        </div>

        <button _ngcontent-c3="" class="btn btn-hero-success btn-block" disabled="">
          Change password
        </button>
      </form>

      <div _ngcontent-c3="" class="links col-sm-12">
        <small _ngcontent-c3="" class="form-text">
          Already have an account? <a _ngcontent-c3="" href="login.php"><strong _ngcontent-c3="">Sign In</strong></a>
        </small>
        <small _ngcontent-c3="" class="form-text">
          <a _ngcontent-c3="" href="register.php"><strong _ngcontent-c3="">Sign Up</strong></a>
        </small>
      </div>

  </nb-auth-block>
  </nb-reset-password-page>
            </div>
          </nb-card-body>

  </nb-card>

  </nb-layout-column>
            </div>

          </div>
        </div>
      </div>
    </div>
  </nb-layout>
  </nb-auth>

<div id="nb-global-spinner" class="spinner hide">
  <div class="blob blob-0"></div>
  <div class="blob blob-1"></div>
  <div class="blob blob-2"></div>
  <div class="blob blob-3"></div>
  <div class="blob blob-4"></div>
  <div class="blob blob-5"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../assets/sweet-alert/js/sweetalert.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/js/ajax/pass-set.js"></script>

</body>
</html>
