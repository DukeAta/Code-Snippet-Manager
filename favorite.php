<?php
include"connection.php";
ob_start();
error_reporting(0);
session_start();

$snipid = $_GET['snipid'];
$userid = $_GET['userid'];


$querySnip   =  "SELECT * FROM addsnippts where sniptsid = $snipid order by sniptsid DESC";
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
}


  $insert="insert into favorite(snipID,snipName,language,userEmail)
	  values('$SnipID','$SnipTitle','$SnipLanguage','$userid')";
	  mysql_query($insert);
	  
	
echo '<script type="text/javascript"> window.location = "index.php" </script>';
?>


