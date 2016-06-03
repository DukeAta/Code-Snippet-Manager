<?php include "header.php";
$id  = $_GET['id'];
$delete  = "delete  from uprofile where id ='$id'";
$res    =  mysql_query($delete);
echo "<script>alert('Data delete Successfully.')</script>";
		     echo '<script type="text/javascript"> window.location ="users.php"; </script>';
 ?>
        <!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Users List</h2>   
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
                             Advanced Tables
                        </div>
                        
                        
                <!------  Menu ------>
                <div class="panel-body">
                    <a class="btn btn-primary" href="registration.php">Add User</a>
                    
                </div>
                <!------  Menu ------>
<style> 
.txtlbls{ float:left !important; margin-right:4%;}
</style>                        
                   <!----- Panel Body Table Start  ----->     
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                             <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    
               
        </div>
           <!-- ------------------- Form Close------------------------->
<?php include "footer.php" ?>