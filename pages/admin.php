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
	<meta https-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>DezineShop< Client Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='../assets/css/css.css' rel='stylesheet' type='text/css'>

    <!-- 	Tooltips And Alerts-->
    <link rel="stylesheet" type="text/css" href="../assets/css/tooltip_style.css">
		<link rel="stylesheet" type="text/css" href="../assets/sweet-alert/css/sweetalert.css" />

    <!--	Custom Styles 		-->
    <link rel="stylesheet" type="text/css" href="../assets/css/custom.css">

</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-5.png">

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
	            <ul class="nav" >
	                <li class="active">
	                    <a href="admin.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li class="">
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
							<li class="" data-image="">
								<a id="profile_summary" href="#" class="dropdown-toggle" data-toggle="dropdown">
	 							   <span class="avatar_profile"><img src="<?php echo $avatarPath; ?>" /></span>
	 							   <!-- For IE9 or below. -->
	 							   <!-- <i class="material-icons">&#xE8AC;</i> -->

	 							   <p class="hidden-lg hidden-md">Profile</p>
	 						   </a>
	 						   <ul class="dropdown-menu ">
									<li><a id="updates-avp" class="updates-avp" data-form="" href="#" onClick="function updates(){$('.avp').removeClass('hide'); $('html').removeClass('nav-open');  } updates()">Update your avatar</a></li>
									<li><a class="updates-psw" data-form="" href="#" onClick="function updates(){$('.psw').removeClass('hide'); $('html').removeClass('nav-open');  } updates()">Change password</a></li>
									<li><a class="updates-emu" data-form="" href="#" onClick="function updates(){$('.emu').removeClass('hide'); $('html').removeClass('nav-open');  } updates()">update your email</a></li>
								</ul>
							</li>
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

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	               <!-- Projects List-->
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Projects</h4>
	                                <p class="category">Here is a list of all your DezineShop projects.</p>
	                            </div>
	                            <?php
	                            $query = "SELECT * FROM projects WHERE client_id =" . mysqli_real_escape_string($conn,$_SESSION["id"]);
								$rows = $conn->query($query);


								?>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead i class="text-primary">
	                                    	<th id="name">Name</th>
	                                    	<th id="date">Start Date</th>
	                                    	<th id="pm">Project Manager</th>
																				<th id="status">Current Status</th>
																				<th id="description">Description</th>
	                                    </thead>
	                                    <tbody>
	                                    	<?php
	                                    	while ($row = mysqli_fetch_assoc($rows)) {
	                                    	//Get the Project manager
    											$id =  $row['id']; //project id
    											$ptID = $conn->query( "SELECT project_team_id FROM team_on_project WHERE projects_id = " . mysqli_real_escape_string($conn,$id));
    											$dataID = mysqli_fetch_assoc($ptID);
    											$ptid = $dataID['project_team_id'];  //project team id
    											//----------------------------------------------------------
    											$pmID = $conn->query("SELECT project_manager_id FROM project_team WHERE id =" . mysqli_real_escape_string($conn,$ptid)); // get object for project manager id
    											$dataPM = mysqli_fetch_assoc($pmID);
    											$dataPMID = $dataPM['project_manager_id'];
    											//---------------------------------------------------------------------------
    											$pm = $conn->query("SELECT members_id FROM project_manager WHERE id =" . mysqli_real_escape_string($conn,$dataPMID)); // get object for project manager id
    											$datapm = mysqli_fetch_assoc($pm);
    											$data_pmid = $datapm['members_id'];
    											//Now we can get the Project managers name
    											//--------------------------------------------------------------------------------
    											$pmName = $conn->query("SELECT fullname FROM members WHERE id =" . mysqli_real_escape_string($conn,$data_pmid)); // get object for project manager id
    											$data_pmName = mysqli_fetch_assoc($pmName);
    										//-----------------End get the Project manager---------------------------------------------------------------------------------------------------

    										//---------------------------------Get the Project status---------------------------------------------------------------------------------------
    											$statusID = $conn->query( "SELECT status_id FROM projects WHERE id = " . mysqli_real_escape_string($conn,$id)); //get the status id
    											$data_statusID = mysqli_fetch_assoc($statusID);
    											$dataStatusID = $data_statusID['status_id'];  //project status id

    											$status = $conn->query( "SELECT status FROM status WHERE id = " . mysqli_real_escape_string($conn,$dataStatusID));
    											$status_data = mysqli_fetch_assoc($status);
    											 //project team id

											?>
	                                        <tr class="tt-wrapper">
	                                        	<td data-name="<?php echo $row['project_name']?>" data-url="<?php echo $row['url'];?>" data-desc="<?php echo $row['description']?>" class="text-primary name"><a href="#"><?php echo $row['project_name']; ?><span class="name TT-span hide">View Project</span></a></td>
	                                        	<td class="date"><?php echo $row['start_date']; ?><span class="TT-span hide">May be updated or changed</span></td>
	                                        	<td class="pm"><a href="#"><?php echo $data_pmName['fullname'];?><!-- <span class="TT-span hide">Contact your project manager.--></span></a></td>
																						<td class="status"data-status= "<?php echo $dataStatusID ?>"><?php echo $status_data['status'];?></td>
																						<td class="desc"><?php echo $row['description'];?></td>
																					</tr>
	                                        <?php }

	                                       // endwhile ?>
	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>
	                <!-- End Projects list -->

	                </div>
									<div class="row mirror_site hide">
		                    <div class="col-md-12">
		                        <div class="card card-plain">
		                            <div class="card-header" data-background-color="purple">
		                                <h4 class="title"></h4>
																		<a class="site-close" href="#"><i class="material-icons">exit_to_app</i></a>
		                                <!-- <p class="category">Handcrafted by our friends from <a target="_blank" href="http://dezineshop.co/">Google</a></p> -->
		                            </div>
		                            <div class="card-content">
										<div class="iframe-container">
											<iframe src="">
												&lt;p&gt;Your browser does not support iframes.&lt;/p&gt;
											</iframe>
										</div>
										<div class="col-md-6 hidden-lg text-center">
											<h5 class="proj_desc"></h5>
										</div>
		                        	</div>
		                    	</div>
		                	</div>
		            	</div>
									<div id="updates" class="col-xs-5">
										<div class="avp hide"><?php include '../forms/avatar_update_form.php'; ?></div>
										<div class="psw hide"><?php include '../forms/pass_update_form.php';?></div>
										<div class="emu hide"><?php include '../forms/email_update_form.php';?></div>
									</div>
	            </div>
	        </div>
			<?php include '../templates/footer.php'; ?>
	    </div>
	</div>
<?php $conn->close(); ?>
<div id="nb-global-spinner" class="spinner hide" >
	<div class="blob blob-0"></div>
	<div class="blob blob-1"></div>
	<div class="blob blob-2"></div>
	<div class="blob blob-3"></div>
	<div class="blob blob-4"></div>
	<div class="blob blob-5"></div>
</div>
</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>
	<script src="../assets/sweet-alert/js/sweetalert.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../assets/js/main.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

</html>
