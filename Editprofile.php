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
 
	 
	 
	  
   $id=$_SESSION['id'];;
  
$select="select* from uprofile where id='$id' ";
$res    = mysql_query($select)or die(mysql_error());
$row    = mysql_fetch_array($res);
  if(isset($_POST['submit']))
 {
	 $fname=$_POST['fname'];
	$name=$_POST['name'];
	$Email=$_POST['email'];
	
	$Date=$_POST['date'];
	$Country=$_POST['country'];
	$location1=$_POST['location'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$photo  = basename($_FILES['file']['name']);
	$location = "photo/".uniqid().$photo;
	 
	  $insert="update uprofile set fname='$fname',name='$name',email='$Email',birthday='$Date',Country='$Country',
	  Location='$location1',contact='$contact',gender='$gender',photo='$location' where id ='$id'";
	  
	  
	  
	 
	  move_uploaded_file($_FILES['file']['tmp_name'],$location);
	 $result=mysql_query($insert)or die(mysql_error());

	 
	 echo "<script>alert('Data insert Successfully.')</script>";
		     echo '<script type="text/javascript"> window.location ="index.php"; </script>';
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
  <input  class="form-control" type="text" name="fname" value="<?php  echo $row['fname'];?>" placeholder="first name" required>
  </div>
   <div class="form-group">
  <label for="">Last Name</label>
  <input  class="form-control" type="text" name="name" value="<?php  echo $row['name'];?>" placeholder="last name" required>
  </div>
  <div class="form-group">
  <label for="">Email</label>
  <input  class="form-control" type="email" name="email" value="<?php  echo $row['emial'];?>" placeholder=" email" required>
  </div>
  <div class="form-group">
  <label for="">Password</label>
  <input  class="form-control" type="password" name="pass" value="" placeholder="Password" required>
  </div>
  <div class="form-group">
   <?php $g = $row['gender'];
  $chek="";
  $chek1="";
       if($g=="Male"){ 
			$chek="Selected";
					  } 
			  else { 
			  $chek1 = "selected";
			   } ?> 
  <label for="">Gender</label>
  <select  name="gender" class="gender">
 
  
  <option <?php echo $chek ;?>  value="Male">Male</option>
  <option <?php echo $chek1 ;?>  value="Female">Female</option>
  
  </select>
  </div>
  <div class="form-group">
  <label for="">Date Of Birth</label>
  <input  class="form-control" type="text" id="sdate" name="date" value="<?php  echo $row['birthday'];?>" placeholder="Date Of Birth">
  </div>
  
  
  
  <div class="form-group">
  <label for="">Country</label>
  
  
  
  
  
  <select name="country" class="salefield">
  <option><?php  echo $row['Country'];?></option>
  <option>ALBANIA</option>
  <option>ALGERIA</option>
  <option>ALGERIA</option>
  <option>ANDORRA</option>
  <option>ANGOLA</option>
  <option>ANGUILLA</option>
  <option>ANTARCTICA</option>
  <option>ANTIGUA AND BARBUDA</option>
  <option>ARGENTINA</option>
  <option>ARMENIA</option>
  <option>ARUBA</option>
  <option>AUSTRALIA</option>
  <option>AUSTRIA</option>
  <option>AZERBAIJAN</option>
  <option>BAHAMAS</option>
  <option>BAHRAIN</option>
  <option>BANGLADESH</option>
  <option>BARBADOS</option>
  <option>BELARUS</option>
  <option>BELGIUM</option>
   <option>BELIZE</option>
  <option>BERMUDA</option>
  <option>BHUTAN</option>
  <option>BOLIVIA</option>
  <option>BOSNIA AND HERZEGOVINA</option>
  <option>BOTSWANA</option>
  <option>BOUVET ISLAND</option>
  <option>BRAZIL</option>
  
  </select>
  </div>
  
 
  <div class="form-group text-left">
  <label for="">Location</label>
  <input  class="form-control" type="text" name="location" value="<?php  echo $row['Location'];?>" placeholder="location" required>
  </div>
  <div class="form-group">
  <label for="">Contact</label>
  <input  class="form-control" type="numder" name="contact" value="<?php  echo $row['Contact'];?>" placeholder="contact number" required>
  </div>
  
  <div class="form-group">
 <input name="file" type="file" required>
 <img src="<?php  echo $row['photo'];?>" width="60px" height="60px"/>
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