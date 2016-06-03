<?php include "header.php"; ?>
<!------------------ Header Close ------------------>

<?php 

$snipid = $_GET['snipid'];
$userid = $_GET['userid'];

$querySnip   =  "SELECT * FROM addsnippts where sniptsid = $snipid order by sniptsid DESC";
$resSnip   =  mysql_query($querySnip) or die(mysql_error());
while($rowSnip  =  mysql_fetch_array($resSnip))
{
  $SnipID     		= $rowSnip['sniptsid'];
  $SnipTitle	    = $rowSnip['title'];
  $SnipCode		    = $rowSnip['description'];
  $SnipUser	    	= $rowSnip['user'];
  $SnipLanguage    	= $rowSnip['languages'];
  
  $SnipDate    		= $rowSnip['date'];
  $SnipStatus    	= $rowSnip['snippts_status'];
  $SnipPrivtOrPublic = $rowSnip['gernal_status'];
}



?>


	<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading">
        <strong><h3><?php echo $SnipTitle ?></h3></strong>
		</div>
	</div>

    <div class="row">
    	<div class="col-xs-12">
			<a href="favorite.php?snipid=<?php echo $SnipID ;?>&userid=<?php echo $_SESSION['user_sess']; ?>">
			<?php echo 'Add Favorite'; ?> <img style="text-align:center" src="images/like.png" width="25" height="25"> </a>
            <br/><span class="codtitle">Language&nbsp;:&nbsp;</span> <span><?php echo $SnipLanguage ?></span>
            &nbsp;&nbsp;&nbsp;<span class="codtitle">Post By&nbsp;:&nbsp;</span> <span><?php echo $SnipUser ?></span>
            &nbsp;&nbsp;&nbsp;<span class="codtitle">Date&nbsp;:&nbsp;</span> <span><?php echo $SnipDate ?></span>
            
        </div>
    </div>

<br clear="all"><br clear="all">
    <div class="row">
    	<div class="col-xs-12">
			<pre><?php echo $SnipCode ?></pre>
            
        </div>
    </div>



<br clear="all">
<br clear="all">
<!------------ Comment Sysytem -------->
<!----------------------- Threaded Comments Start -------------------->
<h3>Post Comments</h3>
<?php 
include "comment_function.php";
?>

<link href="css/comment_style.css" rel="stylesheet" type="text/css" />

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
<!------------------ Footer Start ------------------>    
<?php include "footer.php"; ?>