<?php include "header.php";

$id  = $_GET['id'];
$select  = "select * from  tbl_language ";
$res =mysql_query($select);
$row=mysql_fetch_array($res);
if(isset($_POST['submit']))
{
	$name  = $_POST['lname'];
	$update ="update  tbl_language set langname='$name' where lanid='$id'";
	$res      = mysql_query($update);
	echo "<script>alert('Data update Successfully.')</script>";
		     echo '<script type="text/javascript"> window.location ="languages.php"; </script>';
	}



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
                            <h2> Language</h2>
                        </div>
                        
                        
                <!------  Menu ------>
                <div class="panel-body">
                    
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
                                            <label class="txtLbls">Language Title</label>
                                            <input class="form-control txtfields" name="lname" value="<?php  echo $row['langname'];?>" />
                                        </div>
										<!--------- TextFeild Close --------> 
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
           <!-- ------------------- Form Close------------------------->
<?php include "footer.php" ?>