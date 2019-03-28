<?php
session_start();
session_destroy();
header("location: ../index.php");
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="http://dezineshop.co/favicon.ico" />
  <link rel="icon" type="image/png" href="http://dezineshop.co/favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>DezineShop< Client Dashboard ~ Loggin Out</title>

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
<body class="nb-theme-cosmic logoff" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
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
                        <nb-logout>
                          <div>Logging out, please wait...</div>
                        </nb-logout>
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
    <div id="nb-global-spinner" class="spinner">
      <div class="blob blob-0"></div>
      <div class="blob blob-1"></div>
      <div class="blob blob-2"></div>
      <div class="blob blob-3"></div>
      <div class="blob blob-4"></div>
      <div class="blob blob-5"></div>
    </div>
</body>
</html>
