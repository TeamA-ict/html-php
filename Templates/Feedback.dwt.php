<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Response</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<form method="post" action="response.php" name="form1" id="form1">
        <div class="span3">Feedback</div>
        <div class="span3">
          <input type="text" name="response" id="response">
        </div>
        </div>
       <!-- TemplateBeginEditable name="EditRegion3" --><!-- TemplateEndEditable -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          <input type="submit" value="Submit" />
        </div>
      </form>
      
      
       <?php 
	   include "db.php";
	   
	   $order = "SELECT links FROM feedback
Group BY links
ORDER BY COUNT(*) DESC
    LIMIT    20"; 
	   
	   $result = mysql_query($order);    
 
while($data = mysql_fetch_row($result)){  
echo("<table>
	 <tr>
	 <td>$data[0]</td>
	 <td>$data[1]</td>
	 </table>"); 

 }  

		
		?>
</body>
</html>
