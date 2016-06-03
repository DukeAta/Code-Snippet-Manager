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
                            </div>
                        </div>
			</div>
            <!-- /. ROW  -->

	</div>    
<!------------------ Footer Start ------------------>  

<?php include "footer.php"; ?>