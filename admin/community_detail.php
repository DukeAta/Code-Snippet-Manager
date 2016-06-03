<?php include "header.php";

$snipDetailID = $_GET['snipid'];

$select ="select * from addsnippts where sniptsid ='$snipDetailID' AND gernal_status = 'PU' order by sniptsid DESC";
$res  =  mysql_query($select);



 ?>
<!------------------ Header Close ------------------->

   <div id="content-wrapper">
		<div class="page-header">
			<h1>My Snipptes</h1>
		</div> <!-- / .page-header -->
		
		<div class="row">
			<div class="col-sm-12">

				<div class="panel">
					<div class="panel-heading">
						<div class="col-xs-6">My Snipptes List</div>
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
        <div class="col-xs-12">
            <div class="col-sm-2 col-xs-12 btn btn-success marginright"><a href="favorite.php?snipid=<?php echo $row['sniptsid'] ;?>&userid=<?php echo $UserSessions;?>">Favroit</a></div>
        </div>

<div class="col-xs-12 bord2"> 
    <div class="table-info">
        <div class="table-header">
            <div class="table-caption">
                Snipptes # <?php echo $sr; ?>
            </div>
        </div> 
        
        <div class="col-xs-12 bordbottom"><b>Title:&nbsp;</b><?php echo $row['title']; ?></div>
        <div class="col-xs-12 bordbottom" id="snipDetails"><pre><?php echo $codefull ?></pre></div>
        <div class="col-xs-12 bordbottom bordnone"></div>
        
        
        
<!----------------------- Threaded Comments Start -------------------->
<h3>Post Comments</h3>
<?php 
include "comment_function.php";
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<link href="../css/comment_style.css" rel="stylesheet" type="text/css" />
<script type='text/javascript'>  
$(function(){  
 $("a.reply").click(function() {  
  var id = $(this).attr("id");  
 // alert("click");
  $("#parent_id").attr("value", id);  
 });  
});  
</script>
<div class="col-xs-12" style="">
<ul>                             
<?php 

$snipid = $_GET['snipid'];
$q = "SELECT * FROM threaded_comments WHERE parent_id = 0 AND BuyProductId='$snipid' order by id desc";  
$r = mysql_query($q);  
while($row = mysql_fetch_assoc($r)):  
 getComments($row);  
endwhile; 
?>                       
</ul>
<form id="comment_form" action="post_comment_buy.php" method='post'>  
 <input type="hidden" name="itemid" value="<?php echo $snipid; ?>" />  
 <input type="hidden" name="name" value="<?php echo $UserFirstName;?>"/>  
 <label for="comment_body">Post Comment:</label>  
 <textarea name="comment_body" id='comment_body'></textarea>  
 <input type='hidden' name='parent_id' id='parent_id' value='0'/>  
 <div id='submit_button'>  
  <input type="submit" value="Submit comment"/>  
 </div>  
</form>  
</div>

<!----------------------- Threaded Comments Ends -------------------->
        
        
        
        
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