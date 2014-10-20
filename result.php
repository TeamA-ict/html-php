<?php
include "db.php";

$order = "SELECT links FROM feedback
Group BY links
ORDER BY COUNT(*) DESC
    LIMIT    20";

/*$order = "SELECT response FROM home
Group BY response
ORDER BY COUNT(*) DESC
    LIMIT    20";
	*/


/*$order =SELECT       'response'
    FROM     'home'
    GROUP BY 'response'
    ORDER BY COUNT(*) DESC
    LIMIT    1;*/

$result = mysql_query($order);    
 
while($data = mysql_fetch_row($result)){  
echo("<tr><td>$data[0]</td></tr><br>"); 

 }  
echo "<p><a href=\"http://sachtest.atwebpages.com/\">Back</a></p>";
?>