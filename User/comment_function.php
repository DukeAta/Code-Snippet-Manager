<?php  
function getComments($row) {  
 echo "<li class='comment'>";  
 echo "<div class='aut'>".$row['author']."</div>";  
 echo "<div class='commentbody'>".$row['comment']."</div>";  
 echo "<div class='timestamp'>".$row['created_at']."</div>";  
 echo "<a href='#comment_form' class='reply' id='".$row['id']."'>Reply</a>";  
 /* The following sql checks whether there's any reply for the comment */  
 $q = "SELECT * FROM threaded_comments WHERE parent_id = ".$row['id']."";  
 $r = mysql_query($q);  
 if(mysql_num_rows($r)>0) // there is at least reply  
  {  
  echo "<ul>";  
  while($row = mysql_fetch_assoc($r)) {  
   getComments($row);  
  }  
  echo "</ul>";  
  }  
 echo "</li>";  
}  
?>  