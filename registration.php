<?php
ob_start();
error_reporting(0);
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SnipperApp</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- CSS & Js Links -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" type="text/css">
<!-- Custome Css -->
<link href="css/customestyle.css" rel="stylesheet" type="text/css" />


<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="assetsjs/jquery_002.js"></script>
<script src="assets/js/bootstrap.js"></script>
<style>
.salefield {
    
    height:30px;
	
    margin-bottom: 9px;
    width: 100%;
}
.gender{
	height:30px;
    margin-bottom: 9px;
    width: 100%;
	
	}


</style>


  </head>

  <body role="document">
  
  <?php
  include('connection.php');
  if(isset($_POST['submit']))
 {
	 $fname=$_POST['fname'];
	$name=$_POST['name'];
	$Email=$_POST['email'];
	
	$Mypas = sha1($_POST['pass']);
	$Password= $Mypas;
	
	$photo  = basename($_FILES['file']['name']);
	$location = "photo/".uniqid().$photo;
	 
	  $insert="insert into uprofile(fname,name,email,Password,photo)
	  values('$fname','$name','$Email','$Password','$location')";
	 
	 
	  move_uploaded_file($_FILES['file']['tmp_name'],$location);
	 $result=mysql_query($insert)or die(mysql_error());
	 
	 echo "<script>alert('Sign up Successful.')</script>";
		     echo '<script type="text/javascript"> window.location ="login.php"; </script>';
	 } 
  ?>
  
<link rel="stylesheet" type="text/css" media="all" href="assets/css/jsDatePick_ltr.min.css" />
      <script type="text/javascript" src="assets/js/jsDatePick.min.1.3.js"></script>


<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"sdate",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		
		new JsDatePick({
			useMode:2,
			target:"edate",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		
		
		
	};
</script>




  <div class="container">
  <div class="col-xs-12" style=" margin-left:20px ;padding:50px 100px;">
  <div class="col-xs-3"> </div>
  
  <div class="col-xs-6"> 
  <div class="panel panel-primary">
  <div class="panel-heading">
  
  <strong><h2>Register</h2></strong></div>
  <div class="panel-body">
  <form method="post" enctype="multipart/form-data" >
   <div class="form-group">
  <label for="">First Name</label>
  <input  class="form-control" type="text" name="fname" value="" placeholder="first name" required>
  </div>
   <div class="form-group">
  <label for="">Last Name</label>
  <input  class="form-control" type="text" name="name" value="" placeholder="last name" required>
  </div>
  <div class="form-group">
  <label for="">Email</label>
  <input  class="form-control" type="email" name="email" value="" placeholder=" email" required>
  </div>
  <div class="form-group">
  <label for="">Password</label>
  <input  class="form-control" type="password" name="pass" value="" placeholder="Password" required>
  </div>
  
  <div class="form-group">
 <input name="file" type="file">
  </div>
 <div class="form-group">
  <input class="btn btn-success" name="submit" type="submit" value="Submit">
  </div>
  </form>
  </div>
  </div>
  </div>

  <div class="col-xs-3"> </div> 
 </div>
 </div>                                           
         
                              
<?php include "footer.php" ?>