<?php include "header.php";


$select ="select * from addsnippts where gernal_status = 'PU' order by sniptsid DESC";
$res  =  mysql_query($select);
 ?>
<!------------------ Header Close ------------------->
	

   <div id="content-wrapper">
		<div class="page-header">
			<h1>All Public Snipptes</h1>
		</div> <!-- / .page-header -->
		
		<div class="row">
			<div class="col-sm-12">

				<div class="panel">
					<div class="panel-heading">
						<div class="col-xs-6">All Snipptes List</div>
                        <div class="col-xs-4">
                        		<form name="SearchForm" class="navbar-form pull-left" action="mysnipptes_search.php" method="post">
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
while($row=mysql_fetch_array($res))
{
$sr = 1;	
	$codefull = $row['description'];
	$codeShort = substr($codefull,0,100); 
	 ?>


<!------- Start --------->
<div class="col-xs-6 bord"> 
    <div class="table-info">
        <div class="table-header">
            <div class="table-caption">
                Snipptes # <?php echo $sr; ?>
            </div>
        </div> 
        
        <div class="col-xs-12 bordbottom"><b>Title:&nbsp;</b><?php echo $row['title']; ?></div>
        <div class="col-xs-12 bordbottom"><pre><?php echo $codeShort ?></pre></div>
        <div class="col-xs-12 bordbottom bordnone"></div>
        <div class="col-xs-12">
            <div class="col-xs-4 btn btn-primary marginright"><a href="community_detail.php?snipid=<?php echo $row['sniptsid'] ;?>">Detail</a></div>
            <div class="col-xs-4 btn btn-success marginright"><a href="favorite.php?snipid=<?php echo $row['sniptsid'] ;?>&userid=<?php echo $UserSessions;?>">Favroit</a></div>
            
            <div class="col-xs-3 btn btn-danger marginright"><a onClick="return confirm('Are you sure to delete this record ?');" href="Delstnipts.php?id=<?php  echo $row['sniptsid']?>">Delete</a></div>
        </div>
      </div>                       
</div> 
<?php } ?>                       
<!--------End-------->
                        
					</div>
				</div>
<!-- /11. $JQUERY_DATA_TABLES -->

								<!-- Info table -->
								
								<!-- / Info table -->
								
							</div>
						</div>
</div> 
    


<!---------------- Footer Start ----------------->
<?php include "footer.php"; ?>