﻿<?php include "header.php";

$ids = $_GET['id']; 
if(isset($_POST['submit']))
{
	
	 $title = $_POST['title'];
	 $Public = $_POST['Public'];
	 $User = $_SESSION['user_sess'];
	 $lang = $_POST['lang'];
	 $desc = $_POST['desc'];
	
	 $update ="update  addsnippts set title='$title',languages='$lang',description='$desc', gernal_status = '$Public' where sniptsid='$ids'";
	$res    = mysql_query($update);

	echo "<script>alert('Data update Successfully.')</script>";
		     echo '<script type="text/javascript"> window.location ="mysnipptes.php"; </script>';
	}



$id  = $_GET['id'];
$select  = "select * from  addsnippts where sniptsid = '$id' ";
$res =mysql_query($select);
$row=mysql_fetch_array($res);


	$DBlangu 	 =  $row['languages'];
	$GStatus 	 =  $row['gernal_status']; 

/*if(isset($_POST['submit']))
{
	$title  = $_POST['title'];
	$lang  = $_POST['lang'];
	$desc  = $_POST['desc'];
	$update ="update  addsnippts set title='$title',languages='$lang',description='$desc' where sniptsid='$id'";
	$res      = mysql_query($update);
	echo "<script>alert('Data update Successfully.')</script>";
		     echo '<script type="text/javascript"> window.location ="mysnipptes.php"; </script>';
	}
*/



 ?>
        <!-- /. NAV SIDE  -->
        <style>
        .snippts{
			width:100%;
			height:30px;
			
			}
        
        
        
        </style>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2></h2>   
                        <h5> </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
           
           <!-- ------------------------ Table ------------------------->    
            
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        
                            <h2> Snipptes Edit</h2>
                        </div>
                        
                        
                <!------  Menu ------>
                <div class="panel-body">
                   <?php  echo $update ?>
                </div>
                <!------  Menu ------>
<style>

.txtfields{
			
			border:2px solid #F65D35;
			
			} 
.txtlbls{ float:left !important; margin-right:4%;}
</style>                        
                   <!----- Panel Body Table Start  ----->     
                        
                   
                  
                    
                    <!----- Panel Body Form Start  ----->
                    
                        <div class="panel-body">
                        
                            <div class="row">
                                <div class="col-md-2 col-xs-12">&nbsp;&nbsp;</div>               
                                <div class="col-md-6 col-md-12">
                                
                                
                                
                                    <h3></h3>
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group groupbotom">
                                            <label class="txtLbls">Title</label>
                                            <input class="form-control txtfields" name="title" value="<?php echo $row['title']; ?>" />
                                        </div>
										<!--------- TextFeild Close --------> 

                                        
										<!--------- TextFeild Close --------> 

                                        <div class="form-group">
                                            <label class="txtLbls">Language</label>
                                           <select class="snippts txtfields" name="lang" size="1">

                                             <option value="1">Select Language</option>
                                           <?php
										  $tbl = mysql_query("select * from tbl_language");
										   
                                          
						                 while($rows=mysql_fetch_array($tbl))
				                    	 { 
										 	
										 ?>
					 
										   <option value="<?php echo $rows['lanid'];?>" <?php if ($rows['lanid'] == $DBlangu) { echo "selected"; } ?>><?php echo $rows['langname'];?></option>
											   
											   
											   
						
                                           <?php } ?>
                                           </select>
                                           
										   
										  
                                           
                                           
                                           
                                           
                                        </div>
							<!--------- TextFeild Close -------->
                            
                            
                            
                            
                            
 
                                        <div class="form-group">
                                            <label class="txtLbls">Enter your Snipptes</label>
                                             <textarea class="txtfields" name="desc" cols="67" rows="40"><?php echo $row['description']; ?></textarea>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="txtLbls">Privacy</label>
                                             <select class="txtfields snippts" name="Public">
                                            <?php  
                                            if($rows['langname']=='PU'){
											?>
                                             <option selected="selected" value="PU">Public</option>
                                             <option  value="PR">Private</option>
                                            <?php } else {?> 
                                             <option  value="PU">Public</option>
                                             <option selected="selected"  value="PR">Private</option>
                                            <?php } ?>
                                             </select>
                                        </div>

                                        <div class="form-group">
                                            
                                            <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
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
           <!-- ------------------- Form Close------------------------->
<?php include "footer.php" ?>