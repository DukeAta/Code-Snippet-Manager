<?php include "header.php"; ?>
<!------------------ Header Close ------------------->
<?php

$emailid = $_SESSION['user_sess'];
$select = "select * from uprofile where email='$emailid' ";
$res    = mysql_query($select)or die(mysql_error());
$row    = mysql_fetch_array($res);

?>
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

   <div id="content-wrapper">

		<div class="page-header">
			<h1>Welcome</h1>
		</div> <!-- / .page-header -->

		<div class="row">
			<div class="col-xm-12" style=" margin-left:20px 
              ;padding:0px 118px;">
         <div class="panel panel-primary">
              <div class="panel-heading">
             
              <strong><h2>WelCome &nbsp;<?php   echo $row['name']; ?></h2></strong>
              <div class="col-xs-12">
              <div class="col-xs-4"><br>
              <img class="img-rounded" src="<?php echo $row['photo'];?>" width="200" height="200"/>
              
              </div>
              <div  style="margin-top:50px; "class="col-xs-8">
              <div style="float:left; font-size:24px; color:#036;" class="col-xs-6">First Name</div>
              <div style="float:left; font-size:24px; color:#036;" class="col-xs-6"><?php echo $row['fname'];?></div><br/>
              <div style="float:left; font-size:24px; color:#036;" class="col-xs-6"> Last Name </div>
              <div style="float:left; font-size:24px; color:#036;" class="col-xs-6"><?php echo $row['name'];?></div><br/>
              <div style="float:left; font-size:24px; color:#036;" class="col-xs-6"> Email Adress</div>
              <div style="float:left; font-size:24px; color:#036;" class="col-xs-6"><?php echo $row['email'];?></div><br/>
              <div style="float:left; font-size:24px; font:Verdana, Geneva, sans-serif; color:#036;" class="col-xs-6">Gender</div>
              <div style="float:left; font-size:24px; font:Verdana, Geneva, sans-serif; color:#036;" class="col-xs-6"><?php echo $row['gender'];?></div><br/>
              <div style="float:left; font-size:24px; font:Verdana, Geneva, sans-serif; color:#036;" class="col-xs-6"> Date of Birth</div>
              <div style="float:left; font-size:24px; font:Verdana, Geneva, sans-serif; color:#036;" class="col-xs-6"><?php echo $row['birthday'];?></div><br/>
              
<div style="float:left; font-size:24px; font:Verdana, Geneva, sans-serif; color:#036;" class="col-xs-6"> Country</div>
              <div style="float:left; font-size:24px; font:Verdana, Geneva, sans-serif; color:#036;" class="col-xs-6"><?php echo $row['Country'];?></div><br/>
              
<div style="float:left; font-size:24px; font:Verdana, Geneva, sans-serif; color:#036;" class="col-xs-6">  	Location</div>
              <div style="float:left; font-size:24px; font:Verdana, Geneva, sans-serif; color:#036;" class="col-xs-6"><?php echo $row['Location'];?></div><br/>
              <div style="float:left; font-size:24px; font:Verdana, Geneva, sans-serif; color:#036;" class="col-xs-6">contact</div>
              <div style="float:left; font-size:24px; font:Verdana, Geneva, sans-serif; color:#036;" class="col-xs-6"><?php echo $row['contact'];?></div><br/>
             
              </div>
              </div>
              </div>
          </div>
     </div>
            
            
		</div>
  </div> 
    


<!---------------- Footer Start ----------------->
<?php include "footer.php"; ?>