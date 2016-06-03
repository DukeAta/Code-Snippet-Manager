<?php
ob_start();
include"connection.php";

	 if(isset($_POST['formlogins']))
	 	{	
			$email = $_POST['email'];
			$password =sha1($_POST['password']);
			
			$Quer = "select * from uprofile where email='$email' and Password='$password'";
			$t = mysql_query($Quer);
			if(mysql_num_rows($t)>0)
				{	
				
			     session_start();
			     $_SESSION['user_sess']=$email;
					//echo ('Sucess');
					
    			   echo '<script type="text/javascript"> window.location = "allsnipptes.php" </script>';
				}
		   else 
			   {	
			       $message="Invalid Username/password";
			   }
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

    <title>SnipperApp</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- CSS & Js Links -->
<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" type="text/css">
<!-- Custome Css -->
<link href="css/customestyle.css" rel="stylesheet" type="text/css" />


<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="../js/jquery_002.js"></script>
<script src="../js/bootstrap.js"></script>
<style>
.b{
	border:2px solid #093;
	}
.gray{
	background-color:#36F;
	padding:20px;
	
	
	}

.container{
	
	padding:20px;
	
	}
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
  //include('connection.php');
  /*if(isset($_POST['frmpost']))
 {
	
	 $username=$_POST['lastname'];
	 $Password=$_POST['pass'];
	 $q = "select * from uprofile where name='$username' and Password='$Password'";
	 
	 
	 $r = mysql_query($q);
	 if(mysql_num_rows($r)){
		 
		$row = mysql_fetch_array($r);
		echo $id = $row['id'];
		 
		echo $_SESSION['MM_Username']= $username;
		echo $_SESSION['id']= $id;
		 
		 echo "<script>alert('login Successfull.')</script>";
		     echo '<script type="text/javascript"> window.location ="index.php"; </script>';
		 }
	else{
		  echo "<script>alert('Please Register.')</script>";
		     echo '<script type="text/javascript"> window.location ="registration.php"; </script>';
		}
	 
 }*/
	
	 
	 
  
  
  
  
  
  ?>
  
  
  
  
  
<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
      <script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>


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
  
  <strong><h2>Login</h2></strong></div>
  <div class="panel-body">
  <form method="post" name="formlogins" enctype="multipart/form-data" >
  <div class="form-group">
  
  <label for="">User name</label>
  <input  class="form-control" type="text" name="email" value="" placeholder=" User Email" required>
  </div>
  <div class="form-group">
  <label for="">Password</label>
  <input  class="form-control" type="password" name="password" value="" placeholder="Password" required>
  </div>
  
 <div class="form-group">
  <input class="btn btn-success" name="formlogins" type="submit" value="Submit">
  </div>
  </form>
  </div>
  </div>
  </div>
  
  
 	<div class="col-xs-3"> </div>
 </div>
 </div>
                                            
                              
<?php include "footer.php" ?>