<?php include "header.php";

$id = $_GET['id'];
$select  = "select * from uprofile where id ='$id'";

$res  = mysql_query($select);
$row  = mysql_fetch_array($res);

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
	$location = "../photo/".uniqid().$photo;
	 
	  $insert="update uprofile set fname='$fname',name='$name',email='$Email',birthday='$Date',Country='$Country',
	  Location='$location1',contact='$contact',gender='$gender',photo='$location' where id ='$id'";
	  
	  
	  
	 
	  move_uploaded_file($_FILES['file']['tmp_name'],$location);
	 $result=mysql_query($insert)or die(mysql_error());
	 
	 echo "<script>alert('Data update Successfully.')</script>";
		     echo '<script type="text/javascript"> window.location ="users.php"; </script>';
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
                            <h2> Edit User Profile</h2>
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
                    
                          <!-----for calender----->
  
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


                    
                    <!----- Panel Body Form Start  ----->
                    
                        <div class="panel-body">
                        
                            <div class="row">
                                <div class="col-md-4 col-xs-12">&nbsp;&nbsp;</div>               
                                <div class="col-md-4 col-md-12">
                                
                                
                                
                                    <h3>Update User Profile</h3>
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group groupbotom">
                                            <label class="txtLbls">First Name </label>
                                            <input class="form-control txtfields" name="fname" value="<?php  echo $row['fname'];?>" />
                                        </div>
										<!--------- TextFeild Close--> 

                                        <div class="form-group">
                                            <label class="txtLbls">Last Name</label>
                                            <input class="form-control txtfields"  name="name" value="<?php  echo $row['name'];?>"/>
                                        </div>
					<!--------- TextFeild Close --------> 

                                        <div class="form-group">
                                            <label class="txtLbls">Email</label>
                                            <input class="form-control txtfields" value="<?php  echo $row['email'];?>" name="email" />
                                        </div>
										<!--------- TextFeild Close-->  
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
  <select  name="gender" class="salefield">
 
  
  <option <?php echo $chek ;?>  value="Male">Male</option>
  <option <?php echo $chek1 ;?>  value="Female">Female</option>
  
  </select>
                                        </div>
										<!--------- TextFeild Close----> 

<div class="form-group">
                                            <label class="txtLbls">Date of Birth</label>
                                           <input   class="form-control" type="text" id="sdate" name="date" value="<?php echo $row['birthday'];?>" placeholder="Date Of Birth">
  
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="txtLbls">Country</label>
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
                                        
                                        <div class="form-group">
                                            <label class="txtLbls">Location</label>
                                            <input class="form-control txtfields"  name="location" value="<?php  echo $row['Location'];?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="txtLbls">Contact</label>
                                            <input class="form-control txtfields"  name="contact" value="<?php  echo $row['contact'];?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="txtLbls">Photo</label>
                                           <input name="file" type="file"><img class="img-rounded" src="<?php  echo $row['photo'];?>" width="60px" height="60px"/>
                                        </div>
                                        <div class="form-group">
                                            
                                            <input type="submit" name="submit" class="btn btn-primary" />
                                        </div>
										<!--------- TextFeild Close--> 
                                    </form>
                                    </div>
    							
                                <div class="col-md-4 col-xs-12">&nbsp;&nbsp;</div>


                        </div>
                    </div>  
                        
                    <!----- Panel Body Form Close  ----->  
                        
                    <!----- Panel Body Form Close  ----->
                               
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
               
        </div>
           <!-- ------------------- Form Close------------------------->
<?php include "footer.php" ?>