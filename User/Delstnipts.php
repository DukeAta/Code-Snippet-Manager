<?php include "header.php";
$id = $_GET['id'];

$dele   = "delete from addsnippts where sniptsid='$id'";
$res  = mysql_query($dele);

$deleFav  = "delete from favorite where snipID='$id'";
$resFav  = mysql_query($deleFav);


echo "<script>alert('Data delete Successfully.')</script>";
		     echo '<script type="text/javascript"> window.location ="mysnipptes.php"; </script>';
	
	


 ?>
        <!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2></h2>   
                        <h5></h5>
                       
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
                             Advanced Tables
                        </div>
                        
                        
                <!------  Menu ------>
                <div class="panel-body">
                    <a class="btn btn-primary" href="#">Add Brand</a>
                    <a class="btn btn-primary" href="#">View Brand</a>
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
                                
                                
                                
                                    <h3>Basic Form Examples</h3>
                                    <form role="form">
                                        <div class="form-group groupbotom">
                                            <label class="txtLbls">Text Input</label>
                                            <input class="form-control txtfields" />
                                        </div>
										<!--------- TextFeild Close --------> 

                                        <div class="form-group">
                                            <label class="txtLbls">Text Input</label>
                                            <input class="form-control txtfields" />
                                        </div>
										<!--------- TextFeild Close --------> 

                                        <div class="form-group">
                                            <label class="txtLbls">Text Input</label>
                                            <input class="form-control txtfields" />
                                        </div>
										<!--------- TextFeild Close --------> 

                                        <div class="form-group">
                                            
                                            <input type="submit" name="" class="btn btn-primary" />
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