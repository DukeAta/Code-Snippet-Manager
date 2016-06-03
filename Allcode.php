<?php include "header.php"; 
?>
<!------------------ Header Close ------------------>
	<div class="container"> 

            <div class="row">
            <div class="panel-body">
            
                        <h3>Recent Code Snippets</h3>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>User</th>
                                            <th>Language</th>
                                            <th>Date</th>
                                            <th>Favorite</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 

include('classPaging.php');


//................................................................................	
	
	$limist	=	"";
	$condition	=	"";
	$limist	=	"";
	$limist	=	"";
	$TotalRecs	      = 0;	# Shows total Records
	$NaviLinks        = "";	# Shows Navigational Links
	$BackNaviLinks	  = "";	# Shows Back Navigational Links	
	$ForwardNaviLinks = "";	# Shows Forward Navigational Links		
	$TotalPages	      = "";	# Shows Total # of Pages
	$PageNo		      = 1;	# Shows # of Page			
	$PageIndex	      = 1 ; # Shows # of Page Index				
	$rowsPerPage      = 10;	# Shows Rows Per Page											
	$linkPerPage      = 3;	# Used to show Links Per 
	$Condition		  = "";
	if(!isset($pgObj) && empty($pgObj))
			$pgObj 		= new classPaging ("viewItemforSale.php",$rowsPerPage,$linkPerPage,"","class=\"link\""); 
				
			if(isset($_GET['pgIndex']) && !empty($_GET['pgIndex']) && is_numeric($_GET['pgIndex']) && is_numeric($_GET['currentPage']))
			{
				$PageNo			 = $_GET['currentPage'];	# Shows # of Page			
				$PageIndex		 = $_GET['pgIndex'];		# Shows # of Page Index				
			}	
				
			//Give the Name of which you want to get total Recs
			
$querySnip   =  "SELECT * FROM addsnippts where gernal_status='PU' order by sniptsid DESC LIMIT 10";

			$result=mysql_query($querySnip) ;
			
			//Display the Links on the page
			$pgObj->SetNavigationalLinksNew($result);		
	//-----------------------------------------------------------------------------------								
			//Limit the Records to be displayed on a single page.
			
			$LIMIT = " LIMIT " . (($PageNo-1) * $rowsPerPage). " , " . $rowsPerPage;
			
//---------------------------------------------------------------------------------










$querySnip   =  "SELECT * FROM addsnippts where gernal_status='PU' order by sniptsid DESC LIMIT 10";
$resSnip   =  mysql_query($querySnip) or die(mysql_error());
while($rowSnip  =  mysql_fetch_array($resSnip))
{
  $SnipID     		= $rowSnip['sniptsid'];
  $SnipTitle	    = $rowSnip['title'];
  $SnipUser	    	= $rowSnip['user'];
  $SnipLanguage    	= $rowSnip['languages'];
  
  $SnipDate    		= $rowSnip['date'];
  $SnipStatus    	= $rowSnip['snippts_status'];
  $SnipPrivtOrPublic = $rowSnip['gernal_status'];
  
  
  
?>
                                        <tr class="odd gradeX">
                                            <td><a href="code_detail.php?snipid=<?php echo $SnipID ;?>"><?php echo $SnipTitle; ?></a></td>
                                            <td><?php echo $SnipUser; ?></td>
                                            <td><?php echo $SnipLanguage; ?></td>
                                            <td class="center"><?php echo $SnipDate; ?></td>
                                            <td style="text-align:center"><a  style="text-align:center" href="favorite.php?snipid=<?php echo $SnipID ;?>&userid=<?php echo $UserSessions;?>">
											<img style="text-align:center" src="images/like.png" width="25" height="25"></a></td>
                                        </tr>

<?php } ?>
                                    </tbody>
                                </table>
                                
                                
                                
                                    <?php
	  if(mysql_num_rows($resSnip)=="")
	  {
		echo"no record is found";  
		  
		  }
		  else{ ?>
         
  <table width="40%"  border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td height="10" colspan="8" align="left" class="cssTxtCommon"><div align="center"><strong>
      <!--<a href="#" class="csslink style1">1</a> <a href="#" class="csslink">2</a> <a href="#" class="csslink">3</a> <a href="#" class="csslink">4</a> <a href="#" class="csslink">5</a> <a href="#" class="csslink">6</a> <a href="#" class="csslink">&gt;&gt; </a> -->
      &nbsp;&nbsp;
      <?php echo $BackNaviLinks;?>
      &nbsp;&nbsp;
     <?php echo $NaviLinks;?>
      &nbsp;&nbsp;
      <?php echo $ForwardNaviLinks;?>
      </strong><br />
      Total Records Found &nbsp;
      <?php echo $TotalRecs;?>
      <br />
      Total Pages Found &nbsp;
      <?php echo $TotalPages;?>
    </div></td>
  </tr>
</table>
             <?php  }
               ?>
                            </div>
                        </div>
			</div>
            <!-- /. ROW  -->

	</div>    
<!------------------ Footer Start ------------------>  

<?php include "footer.php"; ?>