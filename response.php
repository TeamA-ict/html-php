<?php 
include "db.php";

	$response = mysql_real_escape_string($_POST['response']);
    
	
   
     
    
     	$registerquery = mysql_query("INSERT INTO home(response) VALUES('$response')");
        if($registerquery)
        {
        	header("Location: index.php");
        	
        }
        else
        {
     		echo "<h1>Error</h1>";   
        }    	
 

?>