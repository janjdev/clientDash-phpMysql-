<?php require '../auth/user_auth.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="http://dezineshop.co/favicon.ico" />
  <link rel="icon" type="image/png" href="http://dezineshop.co/favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>DezineShop< Client Dashboard</title>

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
              <router-outlet _ngcontent-c0=""></router-outlet><nb-login>
    <nb-auth-block _nghost-c3="">

      <h2 class="title">Sign In</h2>
      <small class="form-text sub-title">Hello! Sign in with your username or email</small>

      <form autocomplete="nope" novalidate="" class="ng-touched ng-dirty ng-invalid"  action="login.php" method="post" enctype="application/x-www-form-urlencoded">

        <!---->

        <!---->

        <div class="form-group">
          <label class="sr-only" for="input-email">Email address</label>
          <input autofocus="" class="form-control ng-pristine ng-untouched ng-invalid passup" id="email" data-type="expression" name="email" pattern=".+\@.+\..+" placeholder="Email address" value="<?php if(isset($_COOKIE["member_login"])) {echo $_COOKIE["member_login"];} ?>" required=""/>
          <!---->
          <!---->
        </div>

        <div class="form-group">
          <label class="sr-only" for="input-password">Password</label>
          <input class="form-control ng-untouched ng-pristine ng-invalid passup" id="password" data-type="data" name="password" placeholder="Password" type="password" required="" minlength="4" maxlength="50">
          <!---->
          <!---->
        </div>
        <?php if(isset($message)){ echo
        '<div class="log-error"><p>' . $message . '</p>
        </div>';
        }?>

        <div class="form-group accept-group col-sm-12">
          <nb-checkbox name="rememberMe" class="ng-valid ng-touched ng-dirty">
    <label class="custom-control custom-checkbox">
      <input class="custom-control-input" type="checkbox" name="rememberMe" <?php if(isset($_COOKIE["member_login"])){?> checked <?php }?> />
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">
        Remember me
      </span>
    </label>
  </nb-checkbox>
          <a class="forgot-password" href="request-password.php">Forgot Password?</a>
        </div>
        <button class="btn btn-block btn-hero-success" type="submit" name="submit"disabled="">
          Sign In
        </button>
      </form>

      <div class="links">
        <small class="form-text">
          Don't have an account? <a routerlink="../register" href="register.php"><strong>Request Access</strong></a>
        </small>
      </div>

  </nb-auth-block>
  </nb-login>
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
<div id="nb-global-spinner" class="spinner hide" >
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
