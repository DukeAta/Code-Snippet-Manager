<?php include "header.php";
$id = $_GET['id'];
$dele   = "delete from tbl_language where lanid='$id'";

$res  = mysql_query($dele);
echo "<script>alert('Data delete Successfully.')</script>";
		     echo '<script type="text/javascript"> window.location ="languages.php"; </script>';
	
	


 ?>
