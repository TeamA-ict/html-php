<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/base.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- InstanceBeginEditable name="doctitle" -->	
	<title>Team A ICT</title>


<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--[if lte IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]>     <html class="ie8"> <![endif]-->
<!--[if IE 9]>     <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html>             <!--<![endif]-->
<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
	padding-top: 5px;
	padding-bottom: 40px;
}
</style>
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

<script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
}
xmlhttp.open("GET","result.php",true);
xmlhttp.send();
}
</script>

<script>
function loadXMLDoctwo()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDivtwo").innerHTML=xmlhttp.responseText;
    }
}
xmlhttp.open("GET","Feedback.php",true);
xmlhttp.send();
}
</script>



</head>
<body>

<div class="container">
  
  <div class="masthead">
    <div class="span6"><img src="images/logo.png" alt="Logo"></div>
    <br>
    <br>
    <br>
    <br>
    <div class="offset8">
      <form class="form-search">
        <input type="text" class="input-medium search-query">
        <button type="submit" class="btn">Search</button>
      </form>
    </div>
    <div class="offset9"></div>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <ul class="nav">
            <!-- InstanceBeginEditable name="Navs" -->
			<li><a href="index.php">Home</a></li>
            <li><a href="student.php">Students</a></li>
            <li><a href="parent.php">Parents</a></li>
            <li><a href="teacher.php">Teachers</a></li>
            <li><a href="career.php">Career Advisor</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li class="active"><a href="sitemap.php">Site Map</a></li>
			<!-- InstanceEndEditable -->
            
          </ul>
        </div>
      </div>
    </div>
   </div>
    
    
    <!-- /.navbar -->
    
    
    <div class="container">
  <img src="images/bar.jpg" alt="bar" border="0" usemap="#Map">
    <map name="Map">
      <area shape="rect" coords="82,49,128,91" href="http://www.twitter.com">
      <area shape="rect" coords="135,49,178,90" href="http://www.facebook.com">
      <area shape="rect" coords="185,49,229,91" href="http://www.youtube.com">
    </map>
  </div>
  
  
   <div class="container">

  
  
  <button type="button" class="btn btn-primary" onclick="loadXMLDoctwo()">Let Us Know Your Favorite Link</button>
<div id="myDivtwo">

  
</div>


<!-- InstanceBeginEditable name="EditRegion4" -->
<div class="container">
<br>
<div class="span2" style="padding:47px;">
<h3>Services For</h3>
<ul>
<li><a href="student.php" style="color:#000;">Students</a></li>
<li><a href="teacher.php" style="color:#000;">Teachers</a></li>
<li><a href="career.php" style="color:#000;">Career Advisors</a></li>
<li><a href="parent.php" style="color:#000;">Parents</a></li>

</ul>
</div>



<div class="span8" style="background-color:#CCC; padding:47px;">
<h3>Sitemap</h3>
<br>
<ul>
<li><a href="http://sachtest.atwebpages.com/index.php" style="color:#000;"><strong>Home</strong></a></li>
<ul>
    <li>Social Networking</li>
    	<ul>
            <li><a href="http://www.facebook.com" style="color:#000;">Facebook</a></li>
            <li><a href="http://www.twitter.com" style="color:#000;">Twitter</a></li>
            <li><a href="http://www.linkedin.com" style="color:#000;">LinkedIn</a></li>
        </ul>
    <li>Search</li>
    <li>Most favourite Links</li>
    <li>Videos</li>
    	<ul>
        <li><a href="https://www.youtube.com/watch?v=0zr0RAi6hZM" style="color:#000;">Women in ICT field</a></li>
        <li><a href="https://www.youtube.com/watch?v=7Y__fFMxdgY#t=70" style="color:#000;">Transition to IT</a></li>
        </ul>
    
    <li>Learning Guide</li>
    	<ul>
        <li><a href="http://www.lifehacker.com.au/2014/07/how-the-tech-industry-can-attract-more-female-employees/" style="color:#000;">ICT Education</a></li>
        <li><a href="http://gogirl.org.au/index.php/2014/06/women-in-it-interviews-i/" style="color:#000;">Why choose ICT </a></li>
    	</ul>
    <li>News & Events</li>
    <ul>
        <li><a href="http://www.careershifters.org/success-stories/from-art-editor-to-photographer-and-graphic-designer" style="color:#000;">Transition to ICT</a></li> 
        <li><a href="http://au.gradconnection.com/internships/information-technology/" style="color:#000;">New Internships</a></li> 
    </ul>
    <li>Educational Games</li>
    <ul>
        <li><a href="http://primarygamesarena.com/6th-Grade#Computers" style="color:#000;">Year 5-7</a></li> 
        <li><a href="http://www.helpteaching.com/questions/Technology/Grade_8" style="color:#000;">year 8-10</a></li> 
    </ul>
    <li>Monthly news letter</li>
</ul>

<li><a href="http://sachtest.atwebpages.com/student.php" style="color:#000;"><strong>Students</strong></a></li> 
<li><a href="http://sachtest.atwebpages.com/parent.php" style="color:#000;"><strong>Parents</strong></a></li> 
<li><a href="http://sachtest.atwebpages.com/teacher.php" style="color:#000;"><strong>Teachers</strong></a></li>
<li><a href="http://sachtest.atwebpages.com/career.php" style="color:#000;"><strong>Career Advisor</strong></a></li>
<li><a href="http://sachtest.atwebpages.com/faq.php" style="color:#000;"><strong>FAQ</strong></a></li>
<li><a href="http://sachtest.atwebpages.com/sitemap.php" style="color:#000;"><strong>Site Map</strong></a></li>

</ul>
</div>
</div>


<!-- InstanceEndEditable -->



<div class="container" style="text-align:center;"> <br>
  <br>
  <div class="span3 gradientOne">
    <h3 class="whiteFont"><a href="Video.php">Videos</a></h3>
    <img src="images/Videos.png" alt="Video"> <br>
    <br>
    <ul style="list-style:none;">
      <li><a href="https://www.youtube.com/watch?v=0zr0RAi6hZM" target="_blank">Women in ICT field >></a></li>
      <li><a href="https://www.youtube.com/watch?v=7Y__fFMxdgY#t=70" target="_blank">Transition to IT >></a></li>
    </ul>
    <p><a href="Video.php">Read More >></a></p>
  </div>
  <div class="span3 gradientTwo">
    <h3 class="whiteFont">Learning Guide</h3>
    <img src="images/ebooks.png" alt="Books"> <br>
    <br>
    <ul style="list-style:none;">
      <li><a href="http://www.lifehacker.com.au/2014/07/how-the-tech-industry-can-attract-more-female-employees/" target="_blank">ICT Education >></a></li>
      <li><a href="http://gogirl.org.au/index.php/2014/06/women-in-it-interviews-i/" target="_blank">Why choose ICT >></a></li>
    </ul>
    <p style="color:#ee6601;">Read More >></p>
  </div>
  <div class="span3 gradientThree">
    <h3 class="whiteFont">News & Events</h3>
    <img src="images/news.png" alt="Books"> <br>
    <br>
    <ul style="list-style:none;">
      <li><a href="http://www.careershifters.org/success-stories/from-art-editor-to-photographer-and-graphic-designer" target="_blank">Transition to ICT</a></li>
      <li><a href="http://au.gradconnection.com/internships/information-technology/" target="_blank">New Internships</a></li>
    </ul>
    <p style="color:#fdd99b;">Read More >></p>
  </div>
  <div class="span3 gradientFour">
    <h3 class="whiteFont">Educational Games</h3>
    <img src="images/games.png" alt="Books"> <br>
    <br>
    <ul style="list-style:none;">
      <li><a href="http://primarygamesarena.com/6th-Grade#Computers" target="_blank">Year 5-7</a></li>
      <li><a href="http://www.helpteaching.com/questions/Technology/Grade_8" target="_blank">Year 8-10</a></li>
    </ul>
    <p style="color:#c2d503">Read More >></p>
    <br>
  </div>
</div>
<br>
<br>
<div class="span12">
  <div class="span2"><img src="images/Logo1.png" alt="logo1"></div>
  <div class="span2"><img src="images/Logo2.png" alt="logo1"></div>
  <div class="span2"><img src="images/Logo3.png" alt="logo1"></div>
  <div class="span2"><img src="images/Logo4.png" alt="logo1"></div>
  <div class="span2"><img src="images/Logo5.png" alt="logo1"></div>
  <div class="span2"><img src="images/Logo6.png" alt="logo1"></div>
</div>
</div>
</div>
<!-- /container -->

<script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript"></script>

<div class="row greyColor">
  <div class="container">
  
  <div class="span6 offset1 whiteFont">
  <br>
  <h4>Find Us</h4>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d806400.0834064055!2d145.07961604999997!3d-37.860282799999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC!5e0!3m2!1sen!2sau!4v1410931281358" width="455" height="155" frameborder="0" style="border:0"></iframe>
  <br><br>
  </div>
  
  <div class="span4 whiteFont">
  <br>
  <h4> Subscribe our Monthly Newsletter</h4>
    <form method="post" name="form" id="form" action="subscribe.php">
      <br>
      <input type="text" name="email" id="email" placeholder="Subscribe">
      <br>
      <input type="submit" name="submit" value="Subscribe" class="btn btn-warning">
      </form>
  
  </div>

</div>
</div>
  
  
  
   
    
   
    
<footer>
  <p style="text-align:center;">&copy; Company 2013</p>
</footer>
</body>
<!-- InstanceEnd --></html>

