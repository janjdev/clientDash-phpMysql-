<?php require '../auth/user_reg.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="https://dezineshop.co/favicon.ico" />
  <link rel="icon" type="image/png" href="https://dezineshop.co/favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>DezineShop Client Dashboard ~ Password Request</title>

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

    <!--  Custom Styles     -->
    <link rel="stylesheet" type="text/css" href="../assets/css/nb-custom.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/custom.css">

</head>
<body class="reg nb-theme-cosmic" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
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
              <router-outlet _ngcontent-c0=""></router-outlet><nb-register _nghost-c5="">
    <nb-auth-block _ngcontent-c5="" _nghost-c4="">

      <h2 _ngcontent-c5="" class="title">Sign Up</h2>
      <form autocomplete="nope" novalidate="" _ngcontent-c5="" novalidate="" class="ng-touched ng-dirty ng-invalid" action="register.php" method="post" enctype="application/x-www-form-urlencoded">

        <!---->
        <!---->

        <div _ngcontent-c5="" class="form-group">
          <label _ngcontent-c5="" class="sr-only" for="input-name">Full name</label>
          <input _ngcontent-c5="" autofocus="" class="form-control ng-untouched ng-pristine ng-valid" id="input-name" name="fullName" placeholder="Full name" minlength="4" maxlength="50">
          <!---->
          <!---->
        </div>

        <div _ngcontent-c5="" class="form-group">
          <label _ngcontent-c5="" class="sr-only" for="input-email">Email address</label>
          <input _ngcontent-c5="" class="form-control ng-untouched ng-pristine ng-invalid" id="input-email" data-type="expression" name="email" pattern=".+\@.+\..+" placeholder="Email address" required="">
          <!---->
          <!---->
        </div>

        <div _ngcontent-c5="" class="form-group">
          <label _ngcontent-c5="" class="sr-only" for="input-password">Password</label>
          <input _ngcontent-c5="" class="form-control ng-untouched ng-pristine ng-invalid" id="input-password" data-type="data" name="password" placeholder="Password" type="password" required="" minlength="4" maxlength="50">
          <!---->
          <!---->
        </div>

        <div _ngcontent-c5="" class="form-group">
          <label _ngcontent-c5="" class="sr-only" for="input-re-password">Repeat password</label>
          <input _ngcontent-c5="" class="form-control ng-untouched ng-pristine ng-invalid" id="input-re-password" data-type="data" name="rePass" placeholder="Confirm Password" type="password" required="">
          <!---->
          <!---->
        </div>

        <!----><div _ngcontent-c5="" class="form-group accept-group col-sm-12">
          <nb-checkbox _ngcontent-c5="" name="terms" required="" class="ng-touched ng-dirty ng-valid">
    <label class="custom-control custom-checkbox">
      <input class="custom-control-input" type="checkbox">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">

            Agree to <a _ngcontent-c5="" href="https://dash.dezineshop.co/terms.html" target="_blank"><strong _ngcontent-c5="">Terms &amp; Conditions</strong></a>

      </span>
    </label>
  </nb-checkbox>
        </div>

        <button _ngcontent-c5="" class="btn btn-block btn-hero-success" disabled="">
          Register
        </button>
      </form>

      <div _ngcontent-c5="" class="links">
        <small _ngcontent-c5="" class="form-text">
          Already have an account? <a _ngcontent-c5="" routerlink="../login" href="login.php"><strong _ngcontent-c5="">Sign in</strong></a>
        </small>
      </div>

  </nb-auth-block>
  </nb-register>
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
</ngx-app>
<style>@-webkit-keyframes spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@-moz-keyframes spin{0%{-moz-transform:rotate(0)}100%{-moz-transform:rotate(360deg)}}@keyframes spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}.spinner{position:fixed;top:0;left:0;width:100%;height:100%;z-index:1003;background: #000000;overflow:hidden}  .spinner div:first-child{display:block;position:relative;left:50%;top:50%;width:150px;height:150px;margin:-75px 0 0 -75px;border-radius:50%;box-shadow:0 3px 3px 0 rgba(255,56,106,1);transform:translate3d(0,0,0);animation:spin 2s linear infinite}  .spinner div:first-child:after,.spinner div:first-child:before{content:'';position:absolute;border-radius:50%}  .spinner div:first-child:before{top:5px;left:5px;right:5px;bottom:5px;box-shadow:0 3px 3px 0 rgb(255, 228, 32);-webkit-animation:spin 3s linear infinite;animation:spin 3s linear infinite}  .spinner div:first-child:after{top:15px;left:15px;right:15px;bottom:15px;box-shadow:0 3px 3px 0 rgba(61, 175, 255,1);animation:spin 1.5s linear infinite}
</style>
<div id="nb-global-spinner" class="spinner" style="display: none;">
  <div class="blob blob-0"></div>
  <div class="blob blob-1"></div>
  <div class="blob blob-2"></div>
  <div class="blob blob-3"></div>
  <div class="blob blob-4"></div>
  <div class="blob blob-5"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/validation.js"></script>

</body>
</html>
