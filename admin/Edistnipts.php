<?php include "header.php";

$id  = $_GET['id'];
$select  = "select * from  addsnippts ";
$res =mysql_query($select);
$row=mysql_fetch_array($res);
if(isset($_POST['submit']))
{
	$title  = $_POST['title'];
	$lang  = $_POST['lang'];
	$desc  = $_POST['desc'];
	$update ="update  addsnippts set title='$title',languages='$lang',description='$desc' where sniptsid='$id'";
	$res      = mysql_query($update);
	echo "<script>alert('Data update Successfully.')</script>";
		     echo '<script type="text/javascript"> window.location ="mysnipptes.php"; </script>';
	
	
	
	}






 ?>
        <!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Update Snipptes</h2>   
                        <h5> </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
           
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
                                            <label class="txtLbls">Title</label>
                                            <input class="form-control txtfields" name="title" value="<?php  echo $row['title'];?>" />
                                        </div>
										<!--------- TextFeild Close --------> 

                                        <div class="form-group">
                                            <label class="txtLbls">Languages</label>
                                            <input class="form-control txtfields"  name="lang" value="<?php  echo $row['languages'];?>"/>
                                        </div>
										<!--------- TextFeild Close --------> 

                                        <div class="form-group">
                                            <label class="txtLbls">Description</label>
                                            <input class="form-control txtfields" value="<?php  echo $row['description'];?>" name="desc" />
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
           <!-- ------------------- Form Close------------------------->
<?php include "footer.php" ?>