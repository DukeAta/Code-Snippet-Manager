<?php
include"connection.php";

$GetFavID	= $_GET['id'];
$que = "DELETE FROM `favorite` WHERE favID = '$GetFavID'";
mysql_query($que);
echo '<script type="text/javascript"> window.location = "faveret.php" </script>';
?>