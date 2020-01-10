<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<link rel="stylesheet" href="dc.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background: #FFCC33">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Maulana Azad College</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
	    <li><a href="About.php">About us</a></li>
      <li><a href="">Admission</a></li>
      <li><a href="">Contact us </a></li>
	  <li class="dropdown">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Department
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="MC.HTML">junior Department</a></li>
      <li><a href="ST.HTML">Senior Department</a></li> </ul>
    </ul>
	
	
  <ul class="nav navbar-nav navbar-right">
      <li><a href="Sign.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </nav>
 <h2 style="text-align:center; color:#00000"><b><i> <marquee>Maulana Azad College</marquee></i></b></h2>
<center> 
<div class="container">
  <div class="content section" style="max-width: inherit">
  <img class="mySlides"  src="Azad-clg-img-1.jpg" style="width:100%; height:80%" align="middle"> 
  <img class="mySlides" src="775298.jpg"style="width:100%; height:50%">
  <img class="mySlides" src="148502885220170122013029.jpg" style="width:100%; height:50%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every  3 seconds
}
</script>
</center>
<div style="height:200px; width:1260px; position:absolute; top:650px; border: solid 2px#000033; background-color: #000033;color:#FFFFFF; text-align:center; padding:30px">
<p>Copyright@2019 Powered By Digital Neha</p>
<p>Address: G-12, Town Center,Cidco,Near Dwarkadas Shamkumar,Aurangabad-431001.</p>
<p>Contact No:7385492748/9156016745</p>
<p>Email ID: maulanaazadclg@gmail.com</p>
</div>
</body>
</html>
