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
	<link rel="apple-touch-icon" sizes="76x76" href="https://dezineshop.co/favicon.ico" />
	<link rel="icon" type="image/png" href="https://dezineshop.co/favicon.ico" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>DezineShop Client Dashboard ~ Profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


		<!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <!-- 	Tooltips -->
    <link rel="stylesheet" type="text/css" href="../assets/css/tooltip_style.css">

		<!--	Alerts -->
		<link rel="stylesheet" type="text/css" href="../assets/sweet-alert/css/sweetalert.css">

    <!--	Custom Styles 		-->
    <link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
</head>

<body>
	<div class="wrapper">
	  <div class="sidebar"  data-color="blue" data-image="../assets/img/sidebar-5.png">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="https://dezineshop.co" class="simple-text">
					Dezine Shop
				</a>
			</div>

			<div class="sidebar-wrapper">
				<ul class="nav">
					<li>
							<a href="../pages/admin.php">
									<i class="material-icons">dashboard</i>
									<p>Dashboard</p>
							</a>
					</li>
					<li class="active">
							<a href="user.php">
									<i class="material-icons">account_box</i>
									<p>My Account</p>
							</a>
					</li>
				</ul>
			</div>
	  </div>

    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><h3>Welcome <?php echo $client_name; ?></h3></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="../forms_auth/logout.php" title="logout">
	 							   <i class="material-icons">power_settings_new</i>
	 							   <!-- For IE9 or below. -->
	 							   <!-- <i class="material-icons">&#xE8AC;</i> -->

	 							   <p class="hidden-lg hidden-md">Signin/out</p>
	 						   </a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

      <div id="content" class="content">
          <div id="user_content" class="container-fluid">
              <div class="row">
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header" data-background-color="blue">
                      <h4 class="title">Edit Profile</h4>
											<p class="category">Complete your profile</p>
                    </div>
                    <div class="card-content">
                      <form class="user_data_form" action="../data/user_data_update.php" method="post" enctype="application/x-www-form-urlencoded">
                          <div class="row">
                              <div class="col-md-6">
																	<div class="form-group label-floating">
																		<label class="control-label">Company: <?php echo $data['company_name'];?> (disabled)</label>
																		<input type="text" class="form-control" disabled>
																	</div>
                              </div>
                            	<div class="col-md-5">
																	<div class="form-group label-floating">
																		<label class="control-label">Email: <?php echo $data['email'];?></label>
																		<input type="email" class="form-control"  name="email">
																	</div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
															<div class="form-group label-floating">
																<label class="control-label">Full Name:</label>
																<input type="text" class="form-control" name="fullname" >
															</div>
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-md-5">
																<div class="form-group label-floating">
																	<label class="control-label">Title: <?php echo $data['title'];?></label>
																	<input type="text" class="form-control" name="title">
																</div>
                              </div>
                              <div class="col-md-5">
																<div class="form-group label-floating">
																	<label class="control-label">Phone: <?php echo $data['phone'];?></label>
																	<input type="text" class="form-control" name="phone">
																</div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>About Me</label>
																<div class="form-group label-floating">
			    												<label class="control-label">Tell Us About You </label>
		    													<textarea class="form-control" rows="5" name="personal_info"></textarea>
                								</div>
                              </div>
                            </div>
                         	</div>
													<button type="submit" class="btn btn-primary pull-right btnpro">Update Profile</button>
                         <div class="clearfix"></div>
												 <style>
		 										</style>
		 										<div id="nb-global-spinner" class="spinner hide" >
		 											<div class="blob blob-0"></div>
		 											<div class="blob blob-1"></div>
		 											<div class="blob blob-2"></div>
		 											<div class="blob blob-3"></div>
		 											<div class="blob blob-4"></div>
		 											<div class="blob blob-5"></div>
		 										</div>
                      </form>
											<button id="PassUpdate" class="animated btn" data-color="red">Change Password</button>
											<div id="passForm" class="col-xs-5 col-md-9 psw hide"><?php include '../forms/pass_update_form.php'; ?></div>
                	</div>
                </div>
              </div>

							<div id="profile_summary" class="col-md-4">
    							<div class="card card-profile" <?php if($data['avatar_image_id'] < 3){ echo 'data-color="blue"';}else{echo 'data-color=""';} ?> >
							    	<div class="card-avatar">
							    		<a href="#pablo">
							    			<img class="img" src="<?php echo $avatarPath; ?>" />
							    		</a>
							    	</div>
		    						<div class="content">
		    							<h6 class="category text-gray"><?php echo $data['title'];?></h6>
		    							<h4 class="card-title"><?php echo $client_name;?></h4>
		    							<p class="card-content"><?php echo $data['personal_info'];?></p>
		    							<a href="#" id="OpenImgUpload" class="btn btn-primary btn-round">Update Your Avatar</a>
		    						</div>
										<!-- Forms-->
										<!--Update Avatar Form -->
										<div class="avp hide"><?php include '../forms/avatar_update_form.php';?></div>
    							</div>
		    				</div>
							</div>
	           </div>
	        </div>
				<?php include '../templates/footer.php'; ?>
        </div>
	    </div>
</body>

<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<script src="../assets/sweet-alert/js/sweetalert.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/js/ajax/user_data_update.js"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->

<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js"></script>

</html>
