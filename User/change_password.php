<?php include "header.php";



if(isset($_POST['submit']))
{
	
	$oldpas  = sha1($_POST['oldpass']);
	$pass1  = $_POST['newpass'];
	$pass2  = $_POST['rnewpass'];

	if($pass1==$pass2)
	{
		if($UserDBPass==$oldpas)
		{
			
			$newpass = sha1($pass1);
			$update ="update  uprofile set Password='$newpass' where email='$UserSessions'";
			$res      = mysql_query($update);
			session_destroy();
			echo "<script>alert('Password Change Sucessfully.')</script>";
			echo '<script type="text/javascript"> window.location ="../login.php"; </script>';
			exit();
		}
		else 
		{ 
			echo "<script>alert('Old Password Not Match.')</script>";
			echo '<script type="text/javascript"> window.location ="change_password.php"; </script>';
			exit();
		 }
		
	}else{ 
		echo "<script>alert('Re-Type Password Not Match')</script>";
		echo '<script type="text/javascript"> window.location ="change_password.php"; </script>';
		exit();

 	}
	
	}

 ?>
        <!-- /. NAV SIDE  -->

   <div id="content-wrapper">

		<div class="page-header">
			<h1> Change Password</h1>
		</div> 
        
        <div id="page-wrapper" >
            <div id="page-inner">
           <!-- ------------------------ Table ------------------------->    
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             
                        </div>
                        
                        
                <!------  Menu ------>
                <div class="panel-body">
                   
                </div>
                <!------  Menu ------>
<style> 
.txtlbls{ float:left !important; margin-right:4%;}
</style>                        
                   <!----- Panel Body Table Start  ----->     
                        
                   <!----- Panel Body Table Close  ----->
                    
                    
                    <!----- Panel Body Form Start  ----->
                    
                        <div class="panel-body">
                        
                            <div class="row">
                                <div class="col-md-4 col-xs-12">&nbsp;&nbsp;</div>               
                                <div class="col-md-4 col-md-12">
                                
                                
                                
                                    <h3></h3>
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group groupbotom">
                                            <label class="txtLbls">Old Password</label>
                                            <input class="form-control txtfields" name="oldpass" value="" />
                                        </div>
										<!--------- TextFeild Close --------> 
                                        <div class="form-group groupbotom">
                                            <label class="txtLbls">New Password</label>
                                            <input type="password" class="form-control txtfields" name="newpass" value="" />
                                        </div>
										<!--------- TextFeild Close --------> 

                                        <div class="form-group groupbotom">
                                            <label class="txtLbls">Re-Type New Password</label>
                                            <input type="password" class="form-control txtfields" name="rnewpass" value="" />
                                        </div>
										<!--------- TextFeild Close --------> 
										<div class="form-group">
                                            
                                            <input type="submit" name="submit" class="btn btn-primary" />
                                        </div>
                                        
										<!--------- TextFeild Close --------> 
                                    </form>
                                    </div>
    							
                                <div class="col-md-4 col-xs-12">&nbsp;&nbsp;</div>


                        </div>
                    </div>  
                        
                    <!----- Panel Body Form Close  ----->
                               
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
               
        </div>
        </div>
           <!-- ------------------- Form Close------------------------->
</div>
<?php include "footer.php" ?>