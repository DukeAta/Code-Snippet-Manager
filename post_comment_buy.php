<?php  
include("connection.php");
session_start();
if(isset($_SESSION['user_sess'])){
	  
$author = mysql_real_escape_string($_POST['name']);  
$comment_body = mysql_real_escape_string($_POST['comment_body']);  
$parent_id = mysql_real_escape_string($_POST['parent_id']);
$saleProductId = mysql_real_escape_string($_POST['itemid']);  

$q = "INSERT INTO threaded_comments (author, comment, parent_id, BuyProductId) VALUES ('$author', '$comment_body', '$parent_id', $saleProductId)";  

$r = mysql_query($q);  
if(mysql_affected_rows()==1) {  
 header("location:code_detail.php?snipid=".$saleProductId."");  
}  
else {
echo "Comment cannot be posted. Please try again.";  
} 
}else{
	?>
	<script>
    alert("Please Login First");
    </script>
    <script>
    window.location.href="login.php";
    </script>
	<?php
}
?> 