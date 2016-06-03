<?php include "header.php"; ?>
<!------------------ Header Close ------------------->
	

   <div id="content-wrapper">

		<div class="page-header">
			<h1>My Favorite Snipptes</h1>
		</div> <!-- / .page-header -->

<div class="row">
			<div class="col-sm-12">

				<div class="panel">
                    
                    <div class="panel-heading">
						<div class="col-xs-6">My Favorit List</div>
                        <div class="col-xs-4">
                        		<form name="SearchForm" class="navbar-form pull-left" action="faveret_search.php" method="post">
									<input type="text" name="search" class="form-control searchEquil" placeholder="Search"><input class="btn btn btn-success btn-md" type="submit" name="SearchForm" value="Search" /> 
								</form>
                                
                               </div>
                        <div class="col-xs-2" style="margin-bottom:1px; display:block;">
            				<form name="#" class="navbar-form pull-left">
                            <a class="btn btn-success btn-md" href="addSnipts.php">+ Add Code</a>
                            </form>
                        </div>
                        
                        <span class="panel-title"> &nbsp;</span>
					</div>
                    
					<div class="panel-body">
<?php

                    if(isset($_POST['SearchForm'])){
                         $searchName 	 = $_POST['search'];
                    }

			         if($searchName != ''){
					 $q = "SELECT * FROM favorite where userEmail = '$UserSessions' AND snipName like '%$searchName%'
					Or language like '%$searchName%' order by favID desc";}

 
$ser = 1;
$querySnip   =  $q;
$resSnip   =  mysql_query($querySnip) or die(mysql_error());
if(mysql_num_rows($resSnip)>0){
while($rowSnip  =  mysql_fetch_array($resSnip))
{
  $FavID     		= $rowSnip['favID'];
  $SnipID     		= $rowSnip['snipID'];
  $SnipTitle	    = $rowSnip['snipName'];
  $SnipLanguage    	= $rowSnip['language'];
  $UserEmail    	= $rowSnip['userEmail'];
  $SnipStatus  		= $rowSnip['favStatus'];
  
  	$codefull = $row['description'];
	$codeShort = substr($codefull,0,100); 


$querySnipD  =  "SELECT * FROM addsnippts where sniptsid = '$SnipID'";
$resSnipD   =  mysql_query($querySnipD) or die(mysql_error());
while($rowSnipD  =  mysql_fetch_array($resSnipD))
{
  $codefull    	= $rowSnipD['description'];
  $codeShort = substr($codefull,0,100);
}

?>


<!------- Start --------->
<div class="col-xs-6 bord"> 
    <div class="table-info">
        <div class="table-header">
            <div class="table-caption">
                Snipptes # <?php echo $ser; ?>
            </div>
        </div> 
        
        <div class="col-xs-12 bordbottom"><b>Title:&nbsp;</b><?php echo $SnipTitle; ?></div>
        <div class="col-xs-12 bordbottom"><pre><?php echo $codeShort ?></pre></div>
        <div class="col-xs-12 bordbottom bordnone"></div>
        <div class="col-xs-12">
        	<div class="col-xs-3 btn btn-primary marginright"><a target="_blank" href="faveret_detail.php?snipid=<?php echo $SnipID;?>">Detail</a></div>
            <div class="col-xs-3 btn btn-danger marginright"><a onClick="return confirm('Are you sure to delete this record ?');" href="Delstnipts.php?id=<?php  echo $row['sniptsid'];?>">Delete</a></div>
        </div>
      </div>                       
</div> 
<?php $ser++; 
}

}else { echo 'No Recoard Match';}

 ?>                       
<!--------End-------->
                        
					</div>
                    <br clear="all">
				</div>
<!-- /11. $JQUERY_DATA_TABLES -->

								<!-- Info table -->
								
								<!-- / Info table -->
								
							</div>
						</div>












		
					</div> 
    


<!---------------- Footer Start ----------------->
<?php include "footer.php"; ?>