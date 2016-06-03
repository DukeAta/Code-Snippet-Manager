<?php
include"connection.php";
ob_start();
error_reporting(0);
session_start();

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

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title> SnipperApp </title>

<!-- CSS & Js Links -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
<link href="css/customestyle.css" rel="stylesheet" type="text/css" />


<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="js/jquery_002.js"></script>
<script src="js/bootstrap.js"></script>

    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
            </div>
            <div class="navbar-collapse collapse">
			<div class="col-sm-9-25">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about_us.php">About</a></li>
                <li><a href="Allcode.php">All Code</a></li>
                <li><a href="contact.php">Contact</a></li>
                
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>-->
              </ul>
            </div>
            
            <div class="col-sm-2-5">  
              <ul class="nav navbar-nav">

<?php                               
if(isset($_SESSION['user_sess']))
	{ ?>
                <li class="pull-right"><a href="logout.php">Logout</a></li>
      <?php if($_SESSION['user_sess']=='admin'){ ?>
                <li class="pull-right"><a href="admin/allsnipptes.php">Deshboard</a></li>
      <?php } else {  ?>
                <li class="pull-right"><a href="User/index.php">Deshboard</a></li>
      <?php } ?>

<?php }else{ ?>
                <li class="pull-right"><a href="registration.php">Register</a></li>
                <li class="pull-right"><a href="login.php">Login</a></li>
<?php } ?>
			</ul>              
            </div>
            
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/banner3.png" alt="First slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>-->
          </div>
        </div>
        <div class="item">
          <img src="images/banner2.png" alt="Second slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>-->
          </div>
        </div>
        <div class="item">
          <img src="images/banner1.png" alt="Third slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>-->
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

<!------------------ Header Close ------------------>
