<?php

include"connection.php";
ob_start();
error_reporting(0);
session_start();

if(!isset($_SESSION['user_sess']))
{
	echo '<script type="text/javascript"> alert("You Are Not Login, Please Login First "); </script>';
	echo '<script type="text/javascript"> window.location = "../index.php" </script>';
	}

if($_SESSION['user_sess']!= 'admin')
{
	echo '<script type="text/javascript"> alert("Only For Admin Access"); </script>';
	echo '<script type="text/javascript"> window.location = "../index.php" </script>';
	}



$UserSessions	= $_SESSION['user_sess'];
$querySesion   =  "SELECT * FROM uprofile WHERE email = '$UserSessions'";
$resSesion   =  mysql_query($querySesion) or die(mysql_error());
while($rowSesion  =  mysql_fetch_array($resSesion))
{
  $UserID     		= $rowSesion['id'];
  $UserFirstName    = $rowSesion['fname'];
  $UserLastName    	= $rowSesion['name'];
  $UserEmail    	= $rowSesion['email'];
  
  $fulname			= $UserFirstName.''.$UserLastName;

}
if($UserID!=1){
	
	echo "<script>alert('Data update Successfully.')</script>";
		     echo '<script type="text/javascript"> window.location ="index.php"; </script>';
	
	}

?>

<style>
.bord{
	border: 1px solid #5bc0de;
    height: 305px !important;
    margin: 1px;
    max-height: 304px;
    width: 49% !important;
}
.bordbottom{    
	border-bottom: 1px solid #5bc0de;
    padding: 10px 0;
}
.bordnone{ border:none !important;}
.marginright{ margin-right:7px !important; margin-bottom:7px !important;}
.marginright a{color:#fff !important;}
pre {
    height: 127px !important;
    max-height: 128px !important;
}

#snipDetails pre {
    height: 530px !important;
    min-height: 530px !important;
}

.bord2 {
    border: 1px solid #5bc0de;
    height: auto !important;
    margin: 1px;
    max-height: auto;
    width: 98% !important;
}

</style>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Dashboard - SnipperApp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">
	<!-- LanderApp's stylesheets -->
	<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/landerapp.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->
</head>
<body class="theme-default main-menu-animated">
<script>var init = [];</script>
<!-- Demo script --> <script src="assets/demo/demo.js"></script> <!-- / Demo script -->
<div id="main-wrapper">
<!-- 2. $MAIN_NAVIGATION 
Main navigation
-->
	<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
		<!-- Main menu toggle -->
		<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
		
		<div class="navbar-inner">
			<!-- Main navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<a href="profile.php" class="navbar-brand">
					<strong>Snipper</strong>App
				</a>
				<!-- Main navbar toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

			</div> <!-- / .navbar-header -->

			<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
				<div>
					<!--<ul class="nav navbar-nav">
						<li>
							<a href="#">Home</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
							<ul class="dropdown-menu">
								<li><a href="#">First item</a></li>
								<li><a href="#">Second item</a></li>
								<li class="divider"></li>
								<li><a href="#">Third item</a></li>
							</ul>
						</li>
					</ul>--> 
                    
					<div class="right clearfix">
						
                        <ul class="nav navbar-nav pull-right right-navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
									<img src="<?php echo '../photo/admin.png'?>" alt="<?php echo '../'.$MyPhoto;?>">
									<span><?php echo $_SESSION['user_sess']; ?></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="profile.php">Profile</a></li>
									<li><a href="../logout.php"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;LogOut</a></li>
								</ul>
							</li>
						</ul> <!-- / .navbar-nav -->
                        
                        <ul class="nav navbar-nav pull-right right-navbar-nav">
							<li class="dropdown">
								<a href="community.php">
									<span><?php echo 'Community' ?></span>
								</a>
							</li>
						</ul>
                        
					</div> <!-- / .right -->
                    
                    
				</div>
			</div> <!-- / #main-navbar-collapse -->
		</div> <!-- / .navbar-inner -->
	</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->



<!--++++++++++++++++++++++++++++-->

<!-- 4. $MAIN_MENU =================================================================================

		Main menu
		
		Notes:
		* to make the menu item active, add a class 'active' to the <li>
		  example: <li class="active">...</li>
		* multilevel submenu example:
			<li class="mm-dropdown">
			  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
			  <ul>
				<li>...</li>
				<li class="mm-dropdown">
				  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
				  <ul>
					<li>...</li>
					...
				  </ul>
				</li>
				...
			  </ul>
			</li>
-->
	<div id="main-menu" role="navigation">
		<div id="main-menu-inner">
			<div class="menu-content top" id="menu-content-demo">
				<!-- Menu custom content demo
					 Javascript: html/assets/demo/demo.js
				 -->
				<div>
					<div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold"><?php echo $UserFirstName ?></span></div>

					<img src="<?php echo '../photo/admin.png'; ?>" alt="" class="">
					<div class="btn-group">
<!--					<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
-->						<a name="logout" title="logout" href="../logout.php" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
					</div>
					<a href="#" class="close">&times;</a>
				</div>
			</div>
			<ul class="navigation">
<!--				<li>
					<a href="../index.php"><i class="menu-icon fa fa-sitemap"></i><span class="mm-text">Home</span></a>
				</li>-->

<!--				<li >
					<a href="index.php"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
				</li>-->
				<li class="active">
					<a href="allsnipptes.php"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">All Snipptes</span></a>
				</li>
                <li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-sitemap"></i><span class="mm-text">Filter</span></a>
					<ul>
						<li>
							<?php 
							$selectlan ="select * from tbl_language order by lanid DESC";
							$reslan  =  mysql_query($selectlan);
                            while($rowlan=mysql_fetch_array($reslan))
							{ 
								$lanID		= $rowlan['lanid'];
								$lanNAme	= $rowlan['langname'];
								$lanStatus	= $rowlan['status'];
							?>
                            <a tabindex="-1" href="mysnipptes_search_Bylanguage.php?lan=<?php echo $lanID ?>"><span class="mm-text"><?php echo $lanNAme ?></span></a>
                            <?php } ?>
						</li>
					</ul>
				</li>
				<li>
					<a href="languages.php"><i class="menu-icon fa fa-flask"></i><span class="mm-text">Languages</span></a>
				</li>
				<li>
					<a href="#"><i class="menu-icon fa fa-table"></i><span class="mm-text">News Letters</span></a>
				</li>
				<li>
					<a href="faveret.php"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">Favorite</span></a>
				</li>
				<li>
					<a href="users.php"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">Users List</span></a>
				</li>
				
				
				
			</ul> <!-- / .navigation -->
		</div> <!-- / #main-menu-inner -->
	</div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->

<!------------------ Header Close ------------------->
	
